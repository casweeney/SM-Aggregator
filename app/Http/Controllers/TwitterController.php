<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TwitterRecord;
use App\User;
use Twitter;
use Session;
use Redirect;
use Illuminate\Support\Facades\Hash; //Enables the use of encryption
use Illuminate\Support\Facades\Auth; //for authenticating users

class TwitterController extends Controller
{
    public function login(){
        // your SIGN IN WITH TWITTER  button should point to this route
        $sign_in_twitter = true;
        $force_login = false;

        // Make sure we make this request w/o tokens, overwrite the default values in case of login.
        Twitter::reconfig(['token' => '', 'secret' => '']);
        $token = \Twitter::getRequestToken(route('twitter.callback'));

        if (isset($token['oauth_token_secret']))
        {
            $url = \Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);

            Session::put('oauth_state', 'start');
            Session::put('oauth_request_token', $token['oauth_token']);
            Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

            return Redirect::to($url);
        }

        // return Redirect::route('twitter.error');
        abort(404);
    }

    public function callback(){
        // You should set this route on your Twitter Application settings as the callback
        // https://apps.twitter.com/app/YOUR-APP-ID/settings
        if (Session::has('oauth_request_token'))
        {
            $request_token = [
                'token'  => Session::get('oauth_request_token'),
                'secret' => Session::get('oauth_request_token_secret'),
            ];

            \Twitter::reconfig($request_token);

            $oauth_verifier = false;

            if ( request()->has('oauth_verifier'))
            {
                $oauth_verifier = request()->get('oauth_verifier');
            }

            // getAccessToken() will reset the token for you
            $token = Twitter::getAccessToken($oauth_verifier);

            if (!isset($token['oauth_token_secret']))
            {
                return Redirect::route('twitter.login')->with('flash_error', 'We could not log you in on Twitter.');
            }

            $credentials = Twitter::getCredentials();

            if (is_object($credentials) && !isset($credentials->error))
            {
                // dd($credentials,$token);

                $user = Auth::user();

                $usercheck = TwitterRecord::where(['user_id'=>$user->id, 't_user_id'=>$token['user_id']]);
                $check = $usercheck->count();
                if($check > 0){
                    return Redirect::to('/dashboard')->with('error', 'Your twitter account already exist');
                }else{
                    $twitter = new TwitterRecord;
                    $twitter->user_id = $user->id;
                    $twitter->t_user_id = $token['user_id'];
                    $twitter->screen_name = $token['screen_name'];
                    $twitter->oauth_token = $token['oauth_token'];
                    $twitter->oauth_token_secret = $token['oauth_token_secret'];

                    if($twitter->save()){
                        dd($credentials,$token);
                    }
                    // $credentials contains the Twitter user object with all the info about the user.
                    // Add here your own user logic, store profiles, create new users on your tables...you name it!
                    // Typically you'll want to store at least, user id, name and access tokens
                    // if you want to be able to call the API on behalf of your users.

                    // This is also the moment to log in your users if you're using Laravel's Auth class
                    // Auth::login($user) should do the trick.
                    //return Twitter::postTweet(['status' => 'Laravel is beautiful', 'format' => 'json']);
                    // $tweets = Twitter::getUserTimeline(['screen_name' => $credentials->screen_name, 'count' => 20, 'format' => 'json']);

                    // Session::put('access_token', $token);
                    // Session::put('profile_data', [
                    //     'name' => $credentials->name,
                    //     'id' => $credentials->id,
                    //     'screen_name' => $credentials->screen_name
                    // ]);

                    //return Redirect::to('/dashboard')->with('success', 'Congrats! You\'ve successfully signed in!');
                }
            }

            //return Redirect::route('twitter.error')->with('flash_error', 'Crab! Something went wrong while signing you up!');
            abort(404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Services\TokenFetcherService;
use Illuminate\Http\Request;
use Twitter;
use File;
use App\TwitterRecord;

class RouteController extends Controller
{
    public function index(){
        return view('index');
    }
    public function signin(){
        return view('signin');
    }
    public function signup(){
        return view('signup');
    }
    public function dashboard(){
        $user = auth()->user();

        $twitter_details = TwitterRecord::where(['user_id'=>$user->id])->first();

        if($twitter_details){
            Twitter::reconfig((new TokenFetcherService())->getTwitterToken());
            $credentials = Twitter::getCredentials();
            $data = Twitter::getUserTimeline(['screen_name' => $twitter_details['screen_name'], 'count' => 5, 'format' => 'array']);
            $mentions = Twitter::getMentionsTimeline(['count' => 5, 'format' => 'array']);
            return view('user.index', ['data'=>$data, 'twitter_details'=>$twitter_details, 'mentions'=>$mentions, 'credentials'=>$credentials]);
        }else{
            return view('user.index');
        }
    }
    public function publisher(){
        return view('user.pages.calendar');
    }
    public function new_post(){
        return view('user.pages.new_post');
    }



    public function tweet(Request $request)
    {
        $user = auth()->user();

        $twitter_details = TwitterRecord::where(['user_id'=>$user->id])->first();

        if($twitter_details){
            Twitter::reconfig((new TokenFetcherService())->getTwitterToken());

            $this->validate($request, [
        		'post_text' => 'required'
        	]);


            $newTwitte = ['status' => $request->post_text];

            
            if(!empty($request->images)){
                foreach ($request->images as $key => $value) {
                    $uploaded_media = Twitter::uploadMedia(['media' => File::get($value->getRealPath())]);
                    if(!empty($uploaded_media)){
                        $newTwitte['media_ids'][$uploaded_media->media_id_string] = $uploaded_media->media_id_string;
                    }
                }
            }


            $twitter = Twitter::postTweet($newTwitte);
            
            return redirect('/dashboard')->with('success', 'Post shared successful');
        }else{
            return redirect('/new_post')->with('error', 'No twitter account');
        }
    }
}

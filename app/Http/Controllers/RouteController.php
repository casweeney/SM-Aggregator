<?php

namespace App\Http\Controllers;

use App\Http\Services\TokenFetcherService;
use Illuminate\Http\Request;
use Twitter;
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
            $data = Twitter::getUserTimeline(['screen_name' => $twitter_details['screen_name'], 'count' => 5, 'format' => 'array']);
            $mentions = Twitter::getMentionsTimeline(['count' => 5, 'format' => 'array']);
            return view('user.index', ['data'=>$data, 'twitter_details'=>$twitter_details, 'mentions'=>$mentions]);
        }else{
            return view('user.index');
        }
    }
    public function publisher(){
        return view('user.pages.calendar');
    }
}

<?php

namespace App\Http\Services;

use App\TwitterRecord;

class TokenFetcherService {
    private $user;

    public function __construct(){
        $this->user = auth()->user();
    }

    public function getTwitterToken(){
        $twitter_cred = TwitterRecord::where(['user_id'=>$this->user->id])->first();

        if(!$twitter_cred){
            return [
                'token' => '',
                'secret' => ''
            ];
        }else{
            return [
                'token' => $twitter_cred->oauth_token,
                'secret' => $twitter_cred->oauth_token_secret
            ];
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;

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
        // dd(session()->all());
        return view('user.index');
    }
    public function publisher(){
        return view('user.pages.calendar');
    }
}

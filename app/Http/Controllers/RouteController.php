<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('client.index');
    }
    public function publisher(){
        return view('client.pages.calendar');
    }
}

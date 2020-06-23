<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash; //Enables the use of encryption
use Illuminate\Support\Facades\Auth; //for authenticating users

class UserController extends Controller
{
    public function signup(Request $request){
        $validator = \Validator::make($request->all(), [
            'fullname' => 'bail|required',
            'email'   => 'bail|required|unique:users|email',
            'password' => 'bail|required|min:6'
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $user = new User;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($user->save()){
            $data = array();
            $data['status'] = 'success';
            $data['message'] = 'Signup Successful';
            return response()->json($data);
        }else{
            $data = array();
            $data['status'] = 'error';
            $data['message'] = 'Signup failed';
            return response()->json($data);
        }
    }

    public function signin(Request $request){
        $validator = \Validator::make($request->all(), [
            'email'   => 'bail|required|email',
            'password' => 'bail|required'
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user = Auth::user();
            $data = array();
            $data['status'] = 'success';
            return response()->json($data);
        }else{
            $data = array();
            $data['status'] = 'error';
            $data['message'] = 'Login failed: Incorrect details';
            return response()->json($data);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/signin')->with('success', 'You are now logged out');
    }
}

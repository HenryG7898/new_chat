<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

//        if(auth()->user()->	Status == 'Student'){
//            return view('users.login'); /*this would be user home page*/
//        }else
//        {
//            return view('users.login'); /*this would be admin home page*/
//        }
        return view('Sign');

    }
    public function login(Request $request)
    {
        $valid = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($valid)) {
            if (Auth::user()->user_type == 'admin') {
                return view('auth.Home');
            }
            return view('admin.home');
        }
//dd(auth::check());
//        dd($valid);
//        if(Auth::attempt(['email' => 'Admin@gmail.com', 'password' => 12345678, 'Status' => 'Admin'])){
//            $request->session()->regenerate();
////            dd(auth::user());
//
//            return redirect()->intended('');
//        }elseif(Auth::attempt($valid)){
//            $request->session()->regenerate();
//            return view('auth.Home');
//        }

    }


    }

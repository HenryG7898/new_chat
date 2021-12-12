<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SigninController extends Controller
{

    public function onLogin(Request $request){

        $vaild = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($vaild)) {
            if (Auth::user()->role == 'admin') {
//                session()->flash('message', 'Logged in successfully');
                return redirect('dashboard');
            } elseif (Auth::user()->role == 'user') {
//                session()->flash('message', 'Logged in successfully');
                return redirect('home');
            } else {
               return redirect('login');
            }
        }
    }
}

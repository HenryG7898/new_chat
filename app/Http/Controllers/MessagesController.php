<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(){
        $users = User::all();
        return view('Admin.dashboard',compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function delete($id){
        $user = User::where('id',$id);
        dd($user);
    }
}

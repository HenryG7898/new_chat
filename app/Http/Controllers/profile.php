<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profile extends Controller
{
    public function show(){
        return view('User.profile');
    }

    public function updateUser(Request $request){
        $validate = $request->validate([
//            'First_nm' =>['required','string'],
//            'Last_nm' =>['required','string'],
//            'profile_img' => 'required','mimes:png,jpg,jpeg','max:5048',
//            'Gender' =>['required','string'],
//            'DOB' =>['required'],
//            'phone_nbr' =>['required','numeric',],
//            'Email' =>['required','string','email'],
        ]);

//        dd($request->all());

        $pathpfp = $request->file('profile_img')->store('public');



        $cus = new User;

        $data = $cus->find($request->id);

//        dd($data);
        if ($data) {



            $data->first_nm = $request->first_nm;
            $data->last_nm = $request->last_nm;
            $data->email = $request->email;
            $data->gender = $request->gender;
            $data->profile_img = $pathpfp;
            $data->DOB = $request->DOB;
            $data->phone_nbr = $request->phone_nbr;
            $data->save();
        }
        return redirect('Profile');
    }

    public function Edit($id){
        $cus = new User;
        $data = $cus->find($id);
        return view('User.edituser',['data'=>$data]);
    }

    public function delete($id){

        $data = User::find($id);

        $data->delete();

        return redirect('Sign');
    }

}

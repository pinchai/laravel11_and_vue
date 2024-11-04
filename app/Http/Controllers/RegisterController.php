<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function doRegister(Request $request){
        $username = $request->username;
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;
        return view('register_result',
            [
                'username'=>$username,
                'email'=>$email,
                'phone'=>$phone
            ]);

//        return "{$username} - {$email} - {$phone} - {$password}";
    }
}

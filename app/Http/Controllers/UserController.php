<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function login(Request $req)
    {
     $user= User::where(['email'=>$req->email])->first();
     dump($req->password);
     dump($req->email);
     dump($req);
     if(!$user || !Hash::check($req->password, $user->password)){
        return "Username or password is wrong";
    }
    else {
        $req->session()->put('user',$user);
        return redirect('/');
    }
    }
}

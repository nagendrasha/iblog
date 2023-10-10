<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $req){

        // return User::where(['email'=>$req->email])->first();
        $user = User::where(['email'=>$req->email])->first();
        if (!$user || !Hash::check($req->password,$user->password))
        {
            return "Username and Password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/shop');
        }
    }
}

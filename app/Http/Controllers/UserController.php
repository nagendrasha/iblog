<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\assdt_sidebar;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $req){

        // return User::where(['email'=>$req->email])->first();
        $user = User::where(['email'=>$req->email])->first();
        if (!$user || !Hash::check($req->password,$user->password))
        {
            echo "<script>alert('Username and Password is not matched')</script>";
            return redirect('/login');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/dashboard');
        }
    }
    public function dashboard(){
        // print_r($req);
        // die;
        $data = assdt_sidebar::all();    
        return view('admin.dashboard',['assdt_sidebars'=>$data]);
    }
}
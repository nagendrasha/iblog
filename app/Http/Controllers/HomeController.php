<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\product;


class HomeController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function about(){
        echo 'about us page';
    }
}

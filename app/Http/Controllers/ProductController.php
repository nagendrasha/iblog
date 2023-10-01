<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\product;


class ProductController extends Controller
{
    //

    function insert(Request $req){
        $p_name = $req->get('p_name');
        $p_price = $req->get('p_price');
        $p_category = $req->get('p_category');
        $p_image = $req->file('p_image')->GetClientOriginalName();

        //move uploded file
        $req->p_image->move(public_path('images'),$p_image);

        // return $req->input();

        $prod = new product();
        $prod->p_name = $p_name;
        $prod->p_price = $p_price;
        $prod->p_category = $p_category;
        $prod->p_image = $p_image;

        $prod->save();
        return redirect('index');

    }

    public function product_list(){
        $data = DB::table('products')->get();
        return view('index',['data'=>$data]);
    }

    public function shop(){
        $data = DB::table('products')->get();
        return view('shop',['data'=>$data]);
    }

    public function detail($id){
        $data = product::find($id);
        return view('details',['products'=>$data]);
    }

    function readData(){
        $p_data = product::all();
        return view('insert',['data'=>$p_data]);
        // echo $p_data;
    }

    // update data
    function updateordelete(Request $req){
         $id = $req->get('id');
         $p_name = $req->get('p_name');
         $p_price = $req->get('p_price');
         $p_category = $req->get('p_category');
         $p_image = $req->get('p_image');

         if($req->get('update')=='Update'){
            return view('updateview',['id'=>$id,'p_name'=>$p_name,'p_price'=>$p_price,'p_category'=>$p_category]);

         }
         else{
            $prod = product::find($id);
            $prod->delete();
         }
         return redirect('/index');

    }

    function update(Request $req){
        $id = $req->get('id');
        $name = $req->get('p_name');
        $price = $req->get('p_price');
        $category = $req->get('p_category');


        $prod = product::find($id);
        $prod->p_name= $name;
        $prod->p_price = $price;
        $prod->p_category = $category;
        $prod->save();

        return redirect('/index');
    }
}

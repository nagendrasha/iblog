<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //
    public function showpost(Request $req)
    {
        $allposts = Post::latest()->limit(2)->get();
        return view('index', ['posts' => $allposts]);
    }
    public function show_postview()
    {
        return view('admin.add_post');
    }
    public function add_post(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'p_title' => 'required',
            'p_description' => 'required',
            'p_category' => 'required',
            'image' => 'sometimes|image:gif,png,jpeg,jpg',
        ]);
        if ($validator->passes()) {
            $post = new Post();
            $post->p_title = $req->p_title;
            $post->p_category = $req->p_category;
            $post->p_description = $req->p_description;
            $post->save();

            if ($req->image) {
                $ext = $req->image->getClientOriginalExtension();
                $newFileName = time() . '.' . $ext;
                $req->image->move(public_path() . '/uploads/posts/', $newFileName);
                $post->save();
                # code...
            }
            $req->session()->flash('success', 'Post Added Successfully');

            return redirect()->route('post.add_post');
        } 
        else {
            return redirect()->route('post.add_post')->withErrors($validator)->withInput();
        }
    }

    public function all_post()
    {
        $allposts = Post::all();
        return view('admin.all_post', ['posts' => $allposts]);
    }
}

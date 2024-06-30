<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index()
    {
//        $post = DB::table('posts')->where('id', 1)->first();
//
//        return view('welcome', [
//            'post' => $post
//        ]);

        return view('Home.index');
    }

    public function show()
    {
        $post = post::all();

        //$post->published();

//        $post = DB::table('posts')->where('id', $id)->first();
//
//        if(!$post) {
//            abort(404);
//        }

        return view('show', [
            'posts' => $post
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::all();
//        return view('Post.index', compact('posts'));

        return view('Post.index', [
            'posts' => $posts
        ]);
    }
}

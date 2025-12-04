<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Eager Loading: Mengambil post beserta data kategorinya untuk menghindari N+1 query
        $posts = Post::with('category')->get(); 

        return view('posts.index', compact('posts'))->with('title', 'Daftar Post');
    }
}
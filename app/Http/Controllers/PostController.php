<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            // post order by latest paginate 5
            'posts' => Post::orderBy('published_at', 'desc')->paginate(8),
            // 'posts' => Post::latest()->get()
        ]);
    }
    // show single post
    public function show(Post $post)
    {
        // dd($post);
        return view('post', [
            'post' => $post
        ]);
    }
}

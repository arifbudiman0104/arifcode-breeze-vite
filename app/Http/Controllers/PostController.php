<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $posts = Post::orderBy('published_at', 'desc');

        if(request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('content', 'like', '%' . request('search') . '%')
                ->orWhere('excerpt', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            // 'posts' => Post::orderBy('published_at', 'desc')->paginate(8),
            'posts'=> $posts->paginate(8)
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

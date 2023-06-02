<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class publicController extends Controller
{
    /**
     * Show all posts in home page.
     */
    public function index()
    {
        return view('welcome', ['posts' => Post::paginate(10)]);
    }

    /**
     * Show specific post data.
     */
    public function show(Post $post)
    {
        return view('post', compact('post'));
    }
}

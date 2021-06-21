<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function getPosts()
    {
        $posts = Post::all();

        return view('admin.post.posts', compact('posts'));
    }
}

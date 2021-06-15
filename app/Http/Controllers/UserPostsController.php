<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserPostsController extends Controller
{
    public function getPosts()
    {
        $posts = Post::where('user_id', Auth::user()->id)
            ->orderBy('created_at')
            ->get();

        return view('account.user_posts', compact('posts'));
    }
}


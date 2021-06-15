<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Support\Facades\Auth;

class UserPostsController extends Controller
{
    public function getPosts()
    {
        $posts = Post::where('user_id', $this->getCurrentUser())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('account.user_posts', compact('posts'));
    }

    public function getLatestPost()
    {
        $posts = Post::where('user_id', $this->getCurrentUser())
            ->orderBy('created_at', 'desc')
            ->get();
        $post = $posts->first();
        return view('account.successful_post', compact('post'));
    }

    public function getCurrentPost(int $id)
    {
        $postData = Post::where('id', $id)
            ->get();
        $post = $postData[0];

        return view('account.successful_post', compact('post'));
    }

    private function getCurrentUser()
    {
        return Auth::user()->id;
    }
}

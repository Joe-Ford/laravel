<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
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

    public function viewEditForm(int $data)
    {
        $id = $data;

        return view('account.edit_post', compact('id'));
    }

    public function editPost(Request $request, int $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->post = $request->post;
        $post->save();

        return view('account.successful_post', compact('post'));
    }

    private function getCurrentUser()
    {
        return Auth::user()->id;
    }
}

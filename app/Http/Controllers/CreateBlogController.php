<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateBlogController extends Controller
{
    public function index()
    {
        return view('account.create_blog');
    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     */

    public function create(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->post = $request->post;
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route('post');
    }
}


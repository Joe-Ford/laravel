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
        $posts = $this->getAllPosts();

        return view('admin.post.posts', compact('posts'));
    }

    public function viewPost(int $id)
    {
        $post = Post::find($id);

        return view('admin.post.edit_post', compact('post'));
    }

    public function editPost(Request $request, int $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->post = $request->post;
        $post->save();

        $posts = $this->getAllPosts();

        return view('admin.post.posts', compact('posts'));
    }

    public function deletePost(int $id)
    {
        Post::find($id)->delete();

        $posts = $this->getAllPosts();

        return view('admin.post.posts', compact('posts'));
    }

    private function getAllPosts()
    {
        $posts = Post::paginate(5);
        $i = 1;
        foreach ($posts as $post)
        {
            $post->key = $i++;
        }
        return $posts;
    }
}

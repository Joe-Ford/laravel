@extends('account.template')

@section('content')
    <div style="margin-top: 30px;">
    <article class="blog-post">
        <h2 class="blog-post-title">{!! $post->title !!}</h2>
        <p class="blog-post-meta">{!! $post->created_at !!}</p>

        <p class="blog-post-meta">{!! $post->post !!}</p>
        <hr>
        <div style="width: 300px; display: flex; justify-content: space-between">
            <a class="link-secondary" href="{!! route('template') !!}">Home</a>
            <a class="link-secondary" href="{!! route('posts') !!}">Posts</a>
            <a class="link-secondary" href="{!! route('editPost', $post->id) !!}">Edit</a>
        </div>
    </article>
    </div>
@stop

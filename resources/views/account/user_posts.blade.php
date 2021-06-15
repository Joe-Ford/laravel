@extends('account.template')

@section('content')
    <div style="margin-top: 30px;">
        <div style="margin-bottom: 40px;">
            <a class="link-secondary" href="{!! route('template') !!}">Home</a>
        </div>
        @foreach($posts as $post)
            <article class="blog-post">
                <h2 class="blog-post-title"><a href="{!! route('currentPost', $post->id) !!}">{!! $post->title !!}</a></h2>
                <p class="blog-post-meta">{!! $post->created_at !!}</p>
                <hr>
            </article>
        @endforeach
    </div>
@stop

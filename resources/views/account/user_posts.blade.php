@extends('account.template')

@section('content')
    <div style="margin-top: 30px;">
        <div style="margin-bottom: 40px;">
            <a class="link-secondary" href="{!! route('template') !!}">Home</a>
        </div>
        @foreach($posts as $post)
            <article class="blog-post">
                <h2 class="blog-post-title">{!! $post->title !!}</h2>
                <p class="blog-post-meta">{!! $post->created_at !!}</p>
                <hr>
            </article>
        @endforeach
    </div>
@stop

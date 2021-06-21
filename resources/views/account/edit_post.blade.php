@extends('account.template')

@section('content')
    <div style="margin-top: 30px; display: flex;">
        <article class="blog-post" style="width: 800px">
            <form action=" {!! url('/posts/edit/' . $id) !!} " method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating text-secondary">
                    <label for="floatingInput">Topic</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-floating text-secondary" style="margin-top: 10px">
                    <label for="floatingInput">Blog</label>
                    <textarea class="form-control" name="post" id="post" rows="3"></textarea>
                </div>
                <button class="btn btn-lg btn-secondary" type="submit" style="margin-top: 30px; width: 150px">Edit</button>
            </form>
            <hr>
            <div style="width: 300px; display: flex; justify-content: space-between">
                <a class="link-secondary" href="{!! route('template') !!}">Home</a>
                <a class="link-secondary" href="{!! route('posts') !!}">Posts</a>
                <a class="link-secondary" href="{!! route('currentPost', $id) !!}">Back</a>
            </div>
        </article>
    </div>
@stop

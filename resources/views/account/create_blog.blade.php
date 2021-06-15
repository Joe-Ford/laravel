@extends('account.template')

@section('content')
    <form action=" {{url('/create')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating text-secondary">
            <label for="floatingInput">Topic</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-floating text-secondary">
            <label for="floatingInput">Blog</label>
            <textarea class="form-control" name="post" id="post" rows="3"></textarea>
        </div>
        <button class="w-100 btn btn-lg btn-secondary" type="submit">Create</button>
    </form>
@stop

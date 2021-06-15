@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <form method="post">
                {!! csrf_field() !!}
                <h1 class="h2">Edit Category</h1><br>
                <p>Enter category name: <br><input type="text" name="title" class="form-control" value="{{ $category->title }}"></p><br>
                <p>Text category: <br><textarea name="description" class="form-control">{!! $category->description !!}</textarea></p>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </main>
@stop

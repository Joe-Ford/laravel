@extends('layouts.admin')
@section('content')
    <link href="../../../sass/userEdit.css" rel="stylesheet" />
    <div class="container" style="margin-top: 20px;">
        <div class="row gutters">
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <form action=" {!! route('savePost', $post->id) !!} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row gutters" style="display: flex; flex-direction: column;">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{!! $post->title !!}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label for="addition-information">Post</label>
                                            <textarea id="post" name="post" rows="4" class="form-control resume">{!! $post->post !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        {{--<button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>--}}
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

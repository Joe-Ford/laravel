@extends('layouts.admin')
@section('content')
    <link href="../../../sass/usersList.css" rel="stylesheet" />
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Manage Posts</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium pl-4">Id</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Title</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">User id</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td class="pl-4">{!! $post->id !!}</td>
                                    <td>
                                        <h5 class="font-medium mb-0">{!! $post->title !!}</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted">{!! $post->user_id !!}</span><br>
                                    </td>
                                    <td>
                                        <span class="text-muted">{!! $post->created_at !!}</span><br>
                                    </td>
                                    <td>
                                        <a href="{!! route("viewPost", $post->id) !!}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <span class="text-muted" data-feather="edit-2"></span>
                                            <br>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                            <span class="text-muted" data-feather="trash-2"></span>
                                            <br>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

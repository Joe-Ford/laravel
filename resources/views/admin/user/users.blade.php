@extends('layouts.admin')
@section('content')
    <link href="../../../sass/usersList.css" rel="stylesheet" />
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 text-uppercase font-medium pl-4">Id</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Created</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Changed</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="pl-4">{!! $user->id !!}</td>
                                        <td>
                                            <h5 class="font-medium mb-0">{!! $user->name !!}</h5>
                                        </td>
                                        <td>
                                            <span class="text-muted">{!! $user->email !!}</span><br>
                                        </td>
                                        <td>
                                            <span class="text-muted">{!! $user->created_at !!}</span><br>
                                        </td>
                                        <td>
                                            <span class="text-muted">{!! $user->updated_at !!}</span><br>
                                        </td>
                                        <td>
                                            <span class="text-muted">
                                                @if($user->isAdmin == 1)
                                                    Admin
                                                @else
                                                    User
                                                @endif
                                            </span><br>
                                        </td>
                                        <td>
                                            <a href="{!! route('userEdit', $user->id) !!}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <span class="text-muted" data-feather="edit-2"></span>
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

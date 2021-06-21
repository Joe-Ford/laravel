@extends('template')
@section('content')
    <main>
        <div class="col-lg-8 mx-auto p-3 py-md-5">
            <h1>Welcome, {{\Auth::user()->name}}</h1>
            <p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap's compiled, production-ready files with this barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>

            <div class="mb-5">
                <a href="{!! route('createBlog') !!}" class="btn btn-secondary btn-lg px-4">Create blog</a>
            </div>

            <hr class="col-3 col-md-2 mb-5">

            <div class="row g-5">
                <div class="col-md-6">
                    <h2>Starter projects</h2>
                    <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
                    <ul class="icon-list">
                        <li><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank">Bootstrap npm starter</a></li>
                        <li class="text-muted">Bootstrap Parcel starter (coming soon!)</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h2>Guides</h2>
                    <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
                    <ul class="icon-list">
                        <li><a href="/docs/5.0/getting-started/introduction/">Bootstrap quick start guide</a></li>
                        <li><a href="/docs/5.0/getting-started/webpack/">Bootstrap Webpack guide</a></li>
                        <li><a href="/docs/5.0/getting-started/parcel/">Bootstrap Parcel guide</a></li>
                        @if(\Auth::user()->isAdmin == 1)
                            <li><a href="{{ route('admin') }}">Admin Panel</a></li><br>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <br>
@endsection

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://bootstrap-4.ru/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://bootstrap-4.ru/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://bootstrap-4.ru/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin">
        <form method="post">
            {{ csrf_field() }}

            <h1 class="h3 mb-3 fw-normal text-secondary">Please sign in</h1>

            <div class="form-floating text-secondary">
                <input id="inputName" name="name" class="form-control" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating text-secondary">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating text-secondary" style="margin-bottom: 0 !important;">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" style="margin-bottom: 0 !important;">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating text-secondary">
                <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Confirm password">
                <label for="floatingPassword">Confirm password</label>
            </div>

            <div class="checkbox mb-3 text-secondary">
                <label>
                    <input type="checkbox" name="remember" value="1"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-secondary" type="submit">Sign in</button>
            <a class="link-secondary" href="{!! route('index') !!}">Home</a>
            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
        </form>
    </main>

{{--<form class="form-signin container" method="post">
    {{ csrf_field() }}
    <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputName" class="sr-only">Name</label>
    <input type="name" id="inputName" name="name" class="form-control" placeholder="name" required autofocus>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
    <label for="inputPassword" class="sr-only">Confirm password</label>
    <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" value="1"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>--}}

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

@include('inc.messages')
</body>
</html>

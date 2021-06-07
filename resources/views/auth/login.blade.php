<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <title>Wikicode login auth tutorial</title>

    <meta name="description" content="Wikicode login auth in Laravel 8">
    <meta name="author" content="Wikicodes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<html>
<body>
<div class="container align-items-start">
    @if (session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif
    <div class="card card-body container-fluid d-flex justify-content-center mt-5" style="max-width: 30em">
        <h2>Login</h2>
        <form id="signin" class="form-horizontal validate-form" method="POST" action="{{ route('process.login') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off">
                @error('email')
                <div class="error-txt">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off">
                @error('password')
                <div class="error-txt">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label class="mb-0">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

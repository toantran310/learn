<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Authentication App With Laravel 4</title>
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('packages/bootstrap/css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/main.css')}}
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if(!Auth::check())
                <li>{{ HTML::link('users/register', 'Register') }}</li>
                <li>{{ HTML::link('users/login', 'Login') }}</li>
                @else
                <li>{{ HTML::link('users/logout', 'logout') }}</li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

        @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
        @endif
        {{ $content }}

</div>
</body>
</html>
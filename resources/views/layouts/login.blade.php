<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>Livraria - Login</title>

    @section('stylesheets')
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset("favicon.ico")}}" type="image/x-icon"/>
        <link type="text/css" rel="stylesheet" href="{{asset("css/login.css")}}"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    @show
</head>
<body>
<div class="wrapper">
    {{ Form::open(['action' => 'Auth\LoginController@login', 'class' => 'form-signin']) }}
        <div class="form-signin-heading">
            <a href="http://www.adventistas.org/"><img src="{{asset("images/adventist_logo.png")}}" class="logo" alt="Adventist logo"></a>
            <h3 class="heading-text">Livraria</h3>
        </div>
        <hr class="colorgraph"><br>
        <p>
            {{ $errors->first('email') }}
            {{ $errors->first('password') }}
        </p>
        <?= Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => true]); ?>
        <?= Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => true]);?>
        <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
    {{ Form::close() }}
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

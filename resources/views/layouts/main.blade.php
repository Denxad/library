<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>@yield('title')</title>

    @section('stylesheets')
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset("favicon.ico")}}" type="image/x-icon"/>
        <link type="text/css" rel="stylesheet" href="{{asset("css/AdminLTE.min.css")}}"/>
        <link type="text/css" rel="stylesheet" href="{{asset("css/skin-blue.min.css")}}"/>
        <link type="text/css" rel="stylesheet" href="{{asset("css/main.css")}}"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    @show

    @yield('css')

</head>
<body class="hold-transition skin-blue fixed">
<div class="wrapper">

    <header class="main-header">
        <a href="/home" class="logo">
            <img class="img-header" src="{{asset('images/adventist_logo_white.png')}}" alt="">
            <span class="tag-header"><b>Livraria</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="/logout">
                            <i class="fa fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>

            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">TODO</li>
                <li>
                    <a href="/home">
                        <i class="fa fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="/members">
                        <i class="fa fa-user"></i> <span>Membros</span>
                    </a>
                </li>
                <li>
                    <a href="/books">
                        <i class="fa fa-book"></i> <span>Livros</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>

    <!-- =============================================== -->

    <div class="content-wrapper">
        @if(isset($alert))
            <div class="alert alert-popup alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                <strong>{{ $alert['bold-message'] }}</strong> {{ $alert['message'] }}
            </div>
        @endif
        <section class="content-header">
            <h1>
                @yield('header')
                <small>@yield('small-header')</small>
            </h1>
            @if(isset($options))
                <div class="header-option">
                    <button type="button" class="btn btn-default" data-toggle="dropdown">Opções
                        <span class="fa fa-caret-down"></span></button>
                    <ul id="hermit" class="dropdown-menu">
                        @foreach($options as $option)
                            <li><a href="{{ $option['url'] }}">
                            @if(isset($option['icon']))
                                <i class="fas {{@$option['icon']}}"></i>
                            @endif
                            {{ $option['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
        <section class="content">
            @yield('content')
        </section>
    </div>

    <footer class="main-footer">
        FOOTER TODO
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('scripts')
</body>
</html>


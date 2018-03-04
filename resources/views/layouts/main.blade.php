<?php
/**
 * Created by PhpStorm.
 * User: xadden
 * Date: 04-03-2018
 * Time: 16:32
 */

?>

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
        <link type="text/css" rel="stylesheet" href="{{asset("css/skin-purple.min.css")}}"/>
        <link type="text/css" rel="stylesheet" href="{{asset("css/main.css")}}"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    @show
</head>
<body class="hold-transition skin-purple fixed">
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
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-home"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../../index.html"><i class="fa fa-circle-notch "></i> Dashboard v1</a></li>
                        <li><a href="../../index2.html"><i class="fa fa-circle-notch "></i> Dashboard v2</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>

    <!-- =============================================== -->

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('header')
                <small>@yield('small-header')</small>
            </h1>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@yield('box-title')</h3>
                    <div class="box-tools pull-right">
                        <span class="label label-primary">Label</span>
                    </div>
                </div>
                <div class="box-body">
                    @yield('content')
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer">
        FOOTER TODO
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>


@extends('layouts.main')

@section('title', 'Criar cliente')
@section('header', 'Criar cliente')
@section('small-header', '')

@section('content')
    <div class="update-form">
        {{Form::open(['url' => '/client/create'])}}
        @include('clients.form')
        {{ Form::close() }}
    </div>
@stop
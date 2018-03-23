@extends('layouts.main')

@section('title', 'Adicionar membro')
@section('header', 'Adicionar membro')
@section('small-header', '')

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <div class="update-form">
                {{Form::open(['url' => '/member/create'])}}
                @include('members.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
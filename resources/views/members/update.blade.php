@extends('layouts.main')

@section('title', 'Editar - ' . $client->name)
@section('header', 'Editar cliente')
@section('small-header', $client->name)

@section('content')
    <div class="update-form">
        {{Form::model($client, ['url' => '/client/update/' . $client->id])}}
        @include('members.form')
        {{ Form::close() }}
    </div>
@stop
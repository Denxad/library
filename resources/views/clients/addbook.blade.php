@extends('layouts.main')

@section('title', 'Adicionar livro ao cliente')
@section('header', 'Adicionar livro ao cliente')
@section('small-header', $client->name . '#' . $client->id)

@section('content')
    <div class="update-form">
        {{Form::open(['url' => '/client/'. $client->id . '/add/book'])}}

        <div class="form-group">
            {{ Form::label('books', 'Livro para adicionar') }}
            {{ Form::select('books', $books, null) }}
        </div>

            <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">Confirmar</button>
        {{ Form::close() }}
    </div>
@stop
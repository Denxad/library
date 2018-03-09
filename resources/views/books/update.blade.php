@extends('layouts.main')

@section('title', 'Editar - ' . $book->title)
@section('header', 'Editar livro')
@section('small-header', $book->title)

@section('content')
    <div class="update-form">
        {{Form::model($book, ['url' => '/book/update/' . $book->id])}}
        @include('books.form')
        {{ Form::close() }}
    </div>
@stop
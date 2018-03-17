@extends('layouts.main')

@section('title', 'Livraria - '. $book->title)
@section('header', 'Detalhes do livro')
@section('small-header', $book->title . '#' . $book->id)

@section('content')
    <div class="box box-warning">
        <div class="box-header no-border">
            <h3 class="box-title">Detalhes do livro</h3>
            <div class="box-tools pull-right">
                <a href="/book/edit/{{$book->id}}" class="btn-sm btn-block btn-warning"><i class="fas fa-pencil-alt"></i></a>
            </div>
        </div>
        <div class="box-body">
            <div class="model-details">
                <span><b>Título:</b> {{$book->title}}</span>
                <span><b>Preço:</b> {{$book->price}} €</span>
            </div>
        </div>
    </div>

    <div class="box box-danger">
        <div class="box-header no-border">
            <h3 class="box-title">TODO</h3>
        </div>
        <div class="box-body">
            maybe list of members that bought the book or have yet to pay
        </div>
    </div>
@stop
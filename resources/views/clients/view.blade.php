@extends('layouts.main')

@section('title', 'Livraria - Lista de clientes'. $client->name)
@section('header', 'Detalhes do cliente')
@section('small-header', $client->name)

@section('content')
    <div class="box box-warning">
        <div class="box-header no-border">
            <h3 class="box-title">Detalhes Pessoais</h3>
            <div class="box-tools pull-right">
                <a href="/client/update/{{$client->id}}" class="btn-sm btn-block btn-warning"><i class="fas fa-pencil-alt"></i></a>
            </div>
        </div>
        <div class="box-body">
            <div class="model-details">
                <span><b>Nome:</b> {{$client->name}}</span>
                <span><b>Telefone:</b> {{$client->telefone}}</span>
                <span><b>Telemovel:</b> {{$client->telemovel}}</span>
                <span><b>Saldo:</b> {{$client->saldo}} €</span>
            </div>
        </div>
    </div>

    <div class="box box-danger">
        <div class="box-header no-border">
            <h3 class="box-title">Livros</h3>
        </div>
        <div class="box-body">
            books here
        </div>
    </div>
@stop
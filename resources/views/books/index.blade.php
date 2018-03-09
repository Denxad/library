@extends('layouts.main')

@section('title', 'Livraria - Livros')
@section('header', 'Lista de livros')
@section('small-header', 'TODO')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{asset("css/dataTables.bootstrap.min.css")}}"/>
@stop

@section('content')
    <table id="table" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Preço</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->price}} €</td>
                    <td class="table-buttons">
                        <a href="/book/{{$book->id}}" class="btn btn-block btn-success btn-table"><i class="fas fa-eye"></i></a>
                        <a href="/book/update/{{$book->id}}" class="btn btn-block btn-warning btn-table"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('scripts')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('table').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@stop
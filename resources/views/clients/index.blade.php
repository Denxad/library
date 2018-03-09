@extends('layouts.main')

@section('title', 'Livraria - Clientes')
@section('header', 'Lista de clientes')
@section('small-header', 'TODO')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{asset("css/dataTables.bootstrap.min.css")}}"/>
@stop

@section('content')
    <table id="table" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telemovel</th>
            <th>Telefone</th>
            <th>Dívida</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->name}}</td>
                    <td>{{$client->telemovel}}</td>
                    <td>{{$client->telefone}}</td>
                    <td>{{$client->debt}} €</td>
                    <td class="table-buttons">
                        <a href="/client/{{$client->id}}" class="btn btn-block btn-success btn-table"><i class="fas fa-eye"></i></a>
                        <a href="/client/update/{{$client->id}}" class="btn btn-block btn-warning btn-table"><i class="fas fa-pencil-alt"></i></a>
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
                'autoWidth'   : false,
                'language': {
                    "sProcessing":   "A processar...",
                    "sLengthMenu":   "Mostrar _MENU_ registos",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registos",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registos",
                    "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
                    "sInfoPostFix":  "",
                    "sSearch":       "Procurar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                }
            })
        })
    </script>
@stop
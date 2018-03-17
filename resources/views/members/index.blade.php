@extends('layouts.main', [
    'options' => [
        'create-member' => [
            'url' => '/member/add',
            'text' => 'Adicionar membro'
        ]
    ]
])

@section('title', 'Livraria - Membros')
@section('header', 'Lista de membros')
@section('small-header', 'TODO')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link type="text/css" rel="stylesheet" href="{{asset("css/dataTables.bootstrap.min.css")}}"/>
@stop

@section('header-options')
    <li><a href="/member/add">Adicionar membro</a></li>
@stop

@section('content')
    <table id="table" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telemóvel</th>
            <th>Telefone</th>
            <th>Total pago</th>
            <th>Dívida</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->telemovel}}</td>
                    <td>{{$member->telefone}}</td>
                    <td>{{$member->payment}} €</td>
                    <td>{{$member->debt}} €</td>
                    <td class="btn-group">
                        <a href="/member/{{$member->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        <a id="addbook" href="" data-idmember="{{$member->id}}" data-toggle="modal" data-target="#modal-addbook" class="btn btn-warning"><i class="fas fa-plus"></i></a>
                        <a id="addpayment" href="" data-idmember="{{$member->id}}" data-toggle="modal" data-target="#modal-addpayment" class="btn btn-danger"><i class="fas fa-money-bill-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('members.addbook')
    @include('members.addpayment')
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
                },
                "columnDefs": [
                    { "width": "9.1%", "targets": 5, "orderable": false }
                ]
            })
        })
    </script>
@stop
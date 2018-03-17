@extends('layouts.main', [
    'options' => [
        'delete-member' => [
            'url' => '/member/delete/' . $member->id,
            'text' => 'Eliminar membro',
            'icon' => 'fa-exclamation-triangle'
        ]
    ]
])

@section('title', 'Livraria - '. $member->name)
@section('header', 'Detalhes do membro')
@section('small-header', $member->name . '#' . $member->id)

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link type="text/css" rel="stylesheet" href="{{asset("css/dataTables.bootstrap.min.css")}}"/>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header no-border">
            <h3 class="box-title">Detalhes Pessoais</h3>
            <div class="box-tools pull-right">
                <a href="/member/edit/{{$member->id}}" class="btn-sm btn-block btn-warning"><i class="fas fa-pencil-alt"></i></a>
            </div>
        </div>
        <div class="box-body">
            <div class="model-details">
                <span><b>Nome:</b> {{$member->name}}</span>
                <span><b>Telemóvel:</b> {{$member->telemovel}}</span>
                <span><b>Telefone:</b> {{$member->telefone}}</span>
                <span><b>Total pago:</b> {{$member->payment}} €</span>
                <span><b>Dívida:</b> {{$member->debt}} €</span>
            </div>
        </div>
    </div>

    <div class="box box-danger">
        <div class="box-header no-border">
            <h3 class="box-title">Livros comprados</h3>
            <div class="box-tools pull-right">
                <a id="addbook" href="" data-idmember="{{$member->id}}" data-toggle="modal" data-target="#modal-addbook" class="btn-sm btn-block bg-navy"><i class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="box-body">
            <table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Preço</th>
                    <th>Data</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($member->books as $book)
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->pivot->price}} €</td>
                        <td>{{$book->pivot->created_at}}</td>
                        <td class="table-buttons btn-group">
                            <a href="/book/{{$book->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('members.addbook')
@stop

@section('scripts')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('table').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'order': [[ 2, "desc" ]],
                'info': true,
                'autoWidth': false,
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
                    { "width": "6.2%", "targets": 3, "orderable": false }
                ]
            })
        })
    </script>
@stop
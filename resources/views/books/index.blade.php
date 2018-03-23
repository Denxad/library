@extends('layouts.main', [
    'options' => [
        'add-books' => [
            'url' => '/book/add',
            'text' => 'Adicionar livro'
        ]
    ]
])

@section('title', 'Livraria - Livros')
@section('header', 'Lista de livros')
@section('small-header', 'TODO')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{asset("css/dataTables.bootstrap.min.css")}}"/>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Preço</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->price}} €</td>
                        <td class="table-buttons btn-group">
                            <a href="/book/{{$book->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            <a href="/book/edit/{{$book->id}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
                'info': true,
                'autoWidth': false,
                'language': {
                    "sProcessing": "A processar...",
                    "sLengthMenu": "Mostrar _MENU_ registos",
                    "sZeroRecords": "Não foram encontrados resultados",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
                    "sInfoEmpty": "Mostrando de 0 até 0 de 0 registos",
                    "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
                    "sInfoPostFix": "",
                    "sSearch": "Procurar:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext": "Seguinte",
                        "sLast": "Último"
                    }
                },
                "columnDefs": [
                    {"width": "6.2%", "targets": 2, "orderable": false}
                ]
            })
        })
    </script>
@stop
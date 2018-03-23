@extends('layouts.main')

@section('title', 'Livraria - Home')
@section('header', 'Dashboard')
@section('small-header', 'TODO')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Pagamentos - Compras</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <canvas id="canvas" width="40" height="10"></canvas>
        </div>
    </div>
@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script>
        var payments;

        $.ajax({
            url: "/paymentsaleschart",
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                payments = $.map(data, function(el) { return el; });
            }
        });

        var config = {
            type: 'line',
            data: {
                labels: ['Janeiro', 'Feveiro', 'Março'],
                datasets: [{
                    label: 'Compras',
                    borderColor: 'rgb(45,109,200)',
                    backgroundColor: 'rgb(45,109,200)',
                    fill: false,
                    data: [0, 4, 0]
                }, {
                    label: 'Pagamentos',
                    borderColor: 'rgb(243,106,118)',
                    backgroundColor: 'rgb(243,106,118)',
                    fill: false,
                    data: payments
                }]
            },
            options: {
                responsive: true,
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                hover: {
                    mode: 'index',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

        window.onload = function () {
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myLine = new Chart(ctx, config);
        };
    </script>
@stop
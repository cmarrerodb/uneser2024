@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Tablero</h1>
@stop

@section('content')
    {{print_r($gr_total_electores,true)}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card text-white bg-primary mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">HABILITADOS PARA VOTAR</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_electores['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_electores['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_electores['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card text-white bg-success mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">ESTUDIANTES</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                    <li><h3>Total: {{ number_format($total_estudiantes['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_estudiantes['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_estudiantes['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>                    
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card text-white bg-warning text-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">TRABAJADORES</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                    <li><h3>Total: {{ number_format($total_trabajadores['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_trabajadores['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_trabajadores['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card text-white bg-info mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">ADMINISTRATIVOS</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_administrativos['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_administrativos['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_administrativos['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card text-white bg-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">DOCENTES</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_docentes['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_docentes['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_docentes['total_pormovilizar'], 0, ',', '.')}}</h3></li>

                    </ul>                    
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card text-white bg-light text-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">OBREROS</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_obreros['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_obreros['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_obreros['total_pormovilizar'], 0, ',', '.')}}</h3></li>

                    </ul>                       
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card bg-secondary text-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">PENSIONADOS</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_pensionados['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_pensionados['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_pensionados['total_pormovilizar'], 0, ',', '.')}}</h3></li>

                    </ul>   
                </div>
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card text-white bg-danger text-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">JUBILADOS</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_jubilados['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_jubilados['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_jubilados['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>  
                </div>
            </div>            
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="table-container">
                <table 
                    id="tbl-mov-gen" 
                    class="table table-hover" 
                    data-toolbar="#toolbar"
                    data-toggle="table" 
                    data-url="{{route('elect_gen_mov')}}" 
                    data-pagination="true" 
                    data-page-list="[10, 20, 50,  100, 'All']" 
                    data-page-size-options='["10", "20", "50", "100", "Todos"]' 
                    data-custom-all-text="Todos"
                    data-page-size-func="pageSizeFunc"
                    data-page-size="10" 
                    data-show-export="true" 
                    data-export-data-type="all" 
                    data-export-types="['csv', 'json', 'excel']" 
                    data-show-fullscreen="true" 
                    data-show-print="true" 
                    data-locale="es-VE"
                    data-search-accent-neutralise="true"
                    data-show-refresh="true"
                >
                    <thead>
                        <tr>
                            <th colspan="4">MOVILIZACIÓN GENERAL</th>
                        </tr>
                        <tr>
                            <th data-field="tipo">TIPO</th>
                            <th data-field="total_movilizados">MOVILIZDOS</th>
                            <th data-field="total_pormovilizar">POR MOVILIZAR</th>
                            <th data-field="total">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="card-body">
                    <div id="grf-mov-gen" dir="ltr" style="display:flex;justify-content:center;">
                    </div>
                </div>
            </div>
    </div>
@stop
@section('css')
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="{{ asset('assets/css/bootstrap-table.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap-table-group-by.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@toast-ui/chart/dist/toastui-chart.min.css">
@stop
@section('js')
    <script src="{{ asset('/assets/js/bootstrap-table.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table-locale-all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/multiple-sort/bootstrap-table-multiple-sort.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/print/bootstrap-table-print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/sticky-header/bootstrap-table-sticky-header.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/bootstrap-table-locale-all.min.js"></script>    
    <script src="{{ asset('/assets/js/bootstrap-table/extensions/export/bootstrap-table-export.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table/extensions/export/tableExport.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table/extensions/export/xlsx.full.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table-group-by.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@toast-ui/chart"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var gr_total_electores = {!! $gr_total_electores !!};
            const el = document.getElementById('grf-mov-gen');
            var originalObj = gr_total_electores;
            var newObj = {
                categories: ["MOVILIZACIÓN"],
                series: []
            };
                var total = Object.values(originalObj).reduce((acc, curr) => acc + curr, 0);
                for (var key in originalObj) {
                    if (originalObj.hasOwnProperty(key)) {
                        var percentage = originalObj[key];
                        newObj.series.push({
                            name: key,
                            data: percentage
                        });
                    }
                }    
                var data = newObj;
                console.log(data)
                const options = {
                    chart: { title: 'Usage share of web browsers', width: 600, height: 400 },
                    series: {
                        radiusRange: {
                        inner: '60%',
                        outer: '100%',
                        }
                    }        
            };
            const chart = toastui.Chart.pieChart({ el, data, options });
        });
    </script>
@stop

@extends('adminlte::page')
@section('title','Gráficos Movilización Hora')
@section('content_header')
    <meta name="_token" content="{{ csrf_token() }}">
    <h1 class="m-0 text-dark">Gráficos Movilización Hora</h1>
@stop
@section('content')
<div class="accordion" id="acordeonMovilizacionTotal">
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoTotal">
        <button class="accordion-button bg-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoResumen" aria-controls="colapsoResumen">
				Resúmen Movilización
			</button>
		</h2>
		<div id="colapsoResumen" class="accordion-collapse collapse" aria-labelledby="encabezadoTotal" data-bs-parent="#acordeonMovilizacionTotal">
			<div class="accordion-body">
				<!-- Seccion 1 -->
                @include('graficos.partials.resumen')
{{--                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12" style="margin: 0 auto;">
                            <div class="card-body">
               
                                <div id="chart" dir="ltr" style="display:flex;justify-content:center;">
                                </div>
                            </div>
                    </div>
                </div>  --}}
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoNucleo">
			<button class="accordion-button collapsed bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoNucleo" aria-expanded="false" aria-controls="colapsoNucleo">
				Movilización por Núcleo
			</button>
		</h2>
		<div id="colapsoNucleo" class="accordion-collapse collapse" aria-labelledby="encabezadoNucleo" data-bs-parent="#acordeonMovilizacionTotal">
			<div class="accordion-body">
				<!-- Seccion 2 -->
                {{--@include('graficos.partials.nucleos')--}}
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoEstado">
			<button class="accordion-button collapsed bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoEstado" aria-expanded="false" aria-controls="colapsoEstado">
				Movilización por Estado
			</button>
		</h2>
		<div id="colapsoEstado" class="accordion-collapse collapse" aria-labelledby="encabezadoEstado" data-bs-parent="#acordeonMovilizacionTotal">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.estados')--}}
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoTipo">
			<button class="accordion-button collapsed bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoTipo" aria-expanded="false" aria-controls="colapsoTipo">
				Movilización por Tipo
			</button>
		</h2>
		<div id="colapsoTipo" class="accordion-collapse collapse" aria-labelledby="encabezadoEstado" data-bs-parent="#acordeonMovilizacionTotal">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.tipo')--}}
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoNucleoTipo">
			<button class="accordion-button collapsed bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoNucleoTipo" aria-expanded="false" aria-controls="colapsoNucleoTipo">
				Movilización por Nucleo y Tipo
			</button>
		</h2>
		<div id="colapsoNucleoTipo" class="accordion-collapse collapse" aria-labelledby="encabezadoEstado" data-bs-parent="#acordeonMovilizacionTotal">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.nucleo_tipo')--}}
			</div>
		</div>
	</div>
	<!-- ////////////////////// -->
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoEstadoTipo">
			<button class="accordion-button collapsed bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoEstadoTipo" aria-expanded="false" aria-controls="colapsoEstadoTipo">
				Movilización por Estado y Tipo
			</button>
		</h2>
		<div id="colapsoEstadoTipo" class="accordion-collapse collapse" aria-labelledby="encabezadoEstadoTipo" data-bs-parent="#acordeonMovilizacionTotal">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.tipo_estado')--}}
			</div>
		</div>
	</div>
	<!-- ////////////////////// -->
    <hr class="mt-3 mb3"/>
    <div class="accordion" id="acordeonMovilizacionTrabajador">
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoTotalTrabajador">
			<button class="accordion-button bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoResumenTrabajador" aria-expanded="false" aria-controls="colapsoResumenTrabajador">
				Resúmen Movilización Trabajadores
			</button>
		</h2>
		<div id="colapsoResumenTrabajador" class="accordion-collapse collapse" aria-labelledby="encabezadoTotalTrabajador" data-bs-parent="#acordeonMovilizacionTrabajador">
			<div class="accordion-body">
				<!-- Seccion 1 -->
                {{--@include('graficos.partials.resumentra')--}}

			</div>
		</div>
	</div>

	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoNucleoTrabajador">
			<button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoNucleoTrabajador" aria-expanded="false" aria-controls="colapsoNucleoTrabajador">
				Movilización Trabajadores por Núcleo 
			</button>
		</h2>
		<div id="colapsoNucleoTrabajador" class="accordion-collapse collapse" aria-labelledby="encabezadoNucleoTrabajador" data-bs-parent="#acordeonMovilizacionTrabajador">
			<div class="accordion-body">
				<!-- Seccion 2 -->
                {{--@include('graficos.partials.nucleostra')--}}
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoEstadoTrabajador">
			<button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoEstadoTrabajador" aria-expanded="false" aria-controls="colapsoEstadoTrabajador">
				Movilización Trabajadores por Estado
			</button>
		</h2>
		<div id="colapsoEstadoTrabajador" class="accordion-collapse collapse" aria-labelledby="encabezadoEstadoTrabajador" data-bs-parent="#acordeonMovilizacionTrabajador">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.estadostra')--}}
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoTipoTrabajador">
			<button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Trabajador" aria-expanded="false" aria-controls="Trabajador">
				Movilización Trabajadores por Tipo
			</button>
		</h2>
		<div id="Trabajador" class="accordion-collapse collapse" aria-labelledby="encabezadoEstadoTrabajador" data-bs-parent="#acordeonMovilizacionTrabajador">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.tipo')--}}
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoNucleoTipoTrabajador">
			<button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoNucleoTipoTrabajador" aria-expanded="false" aria-controls="colapsoNucleoTipoTrabajador">
				Movilización Trabajadores por Nucleo y Tipo
			</button>
		</h2>
		<div id="colapsoNucleoTipoTrabajador" class="accordion-collapse collapse" aria-labelledby="encabezadoNucleoTipoTrabajador" data-bs-parent="#acordeonMovilizacionTrabajador">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.nucleo_tipotra')--}}
			</div>
		</div>
	</div>
	<!-- ///////////// -->
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoEstadoTipoTrabajador">
			<button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoEstadoTipoTrabajador" aria-expanded="false" aria-controls="colapsoEstadoTipoTrabajador">
				Movilización Trabajadores por Estado y Tipo
			</button>
		</h2>
		<div id="colapsoEstadoTipoTrabajador" class="accordion-collapse collapse" aria-labelledby="encabezadoEstadoTipoTrabajador" data-bs-parent="#acordeonMovilizacionTrabajador">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.tipo_estadotra')--}}
			</div>
		</div>
	</div>	
	<!-- ///////////// -->
    <hr class="mt-3 mb3"/>
    <div class="accordion" id="acordeonMovilizacionEstudiante">
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoTotalEstudiante">
			<button class="accordion-button bg-success text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoResumenEstudiante" aria-expanded="false" aria-controls="colapsoResumenEstudiante">
				Resúmen Movilización Estudiantes
			</button>
		</h2>
		<div id="colapsoResumenEstudiante" class="accordion-collapse collapse" aria-labelledby="encabezadoTotalEstudiante" data-bs-parent="#acordeonMovilizacionEstudiante">
			<div class="accordion-body">
				<!-- Seccion 1 -->
                {{--@include('graficos.partials.resumenest')--}}

			</div>
		</div>
	</div>

	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoNucleoEstudiante">
			<button class="accordion-button collapsed bg-success text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoNucleoEstudiante" aria-expanded="false" aria-controls="colapsoNucleoEstudiante">
				Movilización Estudiantes por Núcleo 
			</button>
		</h2>
		<div id="colapsoNucleoEstudiante" class="accordion-collapse collapse" aria-labelledby="encabezadoNucleoEstudiante" data-bs-parent="#acordeonMovilizacionEstudiante">
			<div class="accordion-body">
				<!-- Seccion 2 -->
                {{--@include('graficos.partials.nucleosest')--}}
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="encabezadoEstadoEstudiante">
			<button class="accordion-button collapsed bg-success text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colapsoEstadoEstudiante" aria-expanded="false" aria-controls="colapsoEstadoEstudiante">
				Movilización Estudiantes por Estado
			</button>
		</h2>
		<div id="colapsoEstadoEstudiante" class="accordion-collapse collapse" aria-labelledby="encabezadoEstadoEstudiante" data-bs-parent="#acordeonMovilizacionEstudiante">
			<div class="accordion-body">
				<!-- Seccion 3 -->
                {{--@include('graficos.partials.estadosest')--}}
			</div>
		</div>
	</div>
**</div>

</div>
@stop
@section('css')
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap-table.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap-table-group-by.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/choices.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
    {{--<link rel="stylesheet" href="https://uicdn.toast.com/chart/latest/toastui-chart.min.css" />--}}
    {{--<link href="{{ URL::asset('assets/libs/tui-chart/tui-chart.min.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@toast-ui/chart/dist/toastui-chart.min.css">
@stop
@section('js')
    <script src="{{ asset('/assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('/assets/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jspdf.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jspdf.plugin.autotable.js') }}"></script>
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
    <script src="{{ asset('/assets/js/jspdf.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table-group-by.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script src="{{ asset('/assets/js/moment.min.js') }}"></script>
    {{--<script src="https://uicdn.toast.com/chart/latest/toastui-chart.min.js"></script>--}}
    {{--<script src="{{ asset('/assets/libs/tui-chart/tui-chart.min.js') }}"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/@toast-ui/chart"></script>
<<script>
    document.addEventListener('DOMContentLoaded', function() {

        const el = document.getElementById('chart');
      const data = {
        categories: [
          '04:00:00',
          '06:00:00',
          '07:00:00',
          '08:00:00',
          '09:00:00',
          '10:00:00',
          '11:00:00',
          '13:00:00',
          '14:00:00',
          '15:00:00',
          '16:00:00',
          '17:00:00',
          '18:00:00',
        ],
        series: [
          {
            name: 'Cantidad',
            data: [1, 2260, 2278, 2319, 2237, 2303, 2334, 2170, 2264, 2302, 2282, 2245, 2243],
          },
          {
            name: 'Acumulado',
            data: [1, 2261, 4539, 6858, 9095, 11392, 13732, 15902, 18166, 20468, 22750, 24995, 27228],
          },
        ],
      };
      const options = {
        chart: { title: 'Movilización por Hora y Acumulada', width: 800, height: 500 },
        xAxis: {
          title: 'Month',
        },
        yAxis: {
          title: 'Amount',
        },
        tooltip: {
          formatter: (value) => `${value} `,
        },
        legend: {
          align: 'bottom',
        },
      };

      
      console.log("data:",data)
      console.log("options:",options)
    //   var chart = new toastui.Chart({
    //       el: container,
    //       data: data,
    //       options: options
    //     });
        const chart = toastui.Chart.lineChart({ el, data, options });
    });
</script>
@stop
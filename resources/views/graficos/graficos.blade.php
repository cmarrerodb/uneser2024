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
				<div class="accordion-body">
                @include('graficos.partials.nucleos')
				<hr/>
                @include('graficos.partials.nucleoshoracant')
				<hr/>
				<H1>PEPE</H1>
				<input type='checkbox' id="selNucAcumChK" checked>
                @include('graficos.partials.nucleoshoraacum')
			</div>
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
                @include('graficos.partials.estados')
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
                @include('graficos.partials.tipos')
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
    <script src="https://cdn.jsdelivr.net/npm/@toast-ui/chart"></script>
<<script>

document.addEventListener('DOMContentLoaded', function() {
	//////////CANTIDAD////////////////
	var nucleosHora = @json($nucleos_hora);
	var el = document.getElementById('grf-nucleoshoracant');
	var horasUnicas = [...new Set(nucleosHora.map(item => item.hora))];
	var seriesData = {};
	nucleosHora.forEach(item => {
		if (!seriesData[item.nucleo]) {
			seriesData[item.nucleo] = {
				name: item.nucleo,
				data: [],
			};
		}
		var index = horasUnicas.findIndex(hora => hora === item.hora);
		seriesData[item.nucleo].data[index] = item.cant;
	});
	var series = Object.values(seriesData);
	var data = {
		categories: horasUnicas, // Utilizar horas como categorías
		series: series
	};
	
	var options = {
		chart: { title: 'Movilización por núcleo y hora', width: 1200, height: 500 },
		xAxis: {
			title: 'Hora',
		},
		yAxis: {
			title: 'Cantidad',
		},
		tooltip: {
			grouped: true,
		},
		legend: {
			align: 'bottom',
		},
		exportMenu: {
			filename: obtenerFechaHoraActual() + " Movilización por núcleo y hora"
		},
		series: {
			spline: true,
			dataLabels: {
				visible: true,
				offsetY: -10
			},
		},
		theme: {
			series: {
				lineWidth: 5,
				dataLabels: {
					fontFamily: 'arial',
					fontSize: 10,
					fontWeight: 'bold',
					useSeriesColor: false,
					textBubble: {
						visible: true,
						paddingY: 3,
						paddingX: 6,
						arrow: {
							visible: true,
							width: 5,
							height: 5,
							direction: 'bottom'
						}
					}
				}
			},
			exportMenu: {
				button: {
					backgroundColor: '#000000',
					borderRadius: 5,
					borderWidth: 2,
					borderColor: '#000000',
					xIcon: {
						color: '#ffffff',
						lineWidth: 3,
					},
					dotIcon: {
						color: '#ffffff',
						width: 10,
						height: 3,
						gap: 1,
					},
				},
			},
		}
	};
	var chartNucleoHoraCant = toastui.Chart.lineChart({ el, data, options });
	//////ACUMULADO///////////
	var series1 = null;
	var nucleosHora = @json($nucleos_hora);
	var el = document.getElementById('grf-nucleoshoraacum');
	var horasUnicas = [...new Set(nucleosHora.map(item => item.hora))];
	var seriesData = {};
	nucleosHora.forEach(item => {
		if (!seriesData[item.nucleo]) {
			seriesData[item.nucleo] = {
				name: item.nucleo,
				data: [],
			};
		}
		var index = horasUnicas.findIndex(hora => hora === item.hora);
		seriesData[item.nucleo].data[index] = parseInt(item.acumulado);
	});
	//////OCUPAR EL ANCHO COMPLETO//////
	// var ancho = window.innerWidth-200;
	// console.log(ancho)
	//////OCUPAR EL ANCHO COMPLETO//////
	series1 = Object.values(seriesData);
	var data = {
		categories: horasUnicas,
		series: series1
	};
	var options = {
		//////OCUPAR EL ANCHO COMPLETO//////
		// chart: { title: 'Movilización acumulada por núcleo y hora', width: ancho, height: 500 },
		//////OCUPAR EL ANCHO COMPLETO//////
		chart: { title: 'Movilización acumulada por núcleo y hora', width: 1100, height: 500 },
		xAxis: {
			title: 'Hora',
		},
		yAxis: {
			title: 'Cantidad',
		},
		tooltip: {
			grouped: true,
		},
		legend: {
			align: 'bottom',
		},
		exportMenu: {
			filename: obtenerFechaHoraActual() + " Movilización acumulada por núcleo y hora"
		},
		series: {
			spline: true,
			selectable:true,
			dataLabels: {
				visible: true,
				offsetY: -10
			},
		},
		theme: {
			series: {
				lineWidth: 5,
				dataLabels: {
					fontFamily: 'arial',
					fontSize: 10,
					fontWeight: 'bold',
					useSeriesColor: false,
					textBubble: {
						visible: true,
						paddingY: 3,
						paddingX: 6,
						arrow: {
							visible: true,
							width: 5,
							height: 5,
							direction: 'bottom'
						}
					}
				}
			},
			exportMenu: {
				button: {
					backgroundColor: '#000000',
					borderRadius: 5,
					borderWidth: 2,
					borderColor: '#000000',
					xIcon: {
						color: '#ffffff',
						lineWidth: 3,
					},
					dotIcon: {
						color: '#ffffff',
						width: 10,
						height: 3,
						gap: 1,
					},
				},
			},
		}
	};
	let var_graf = 'chartNucleoHoraAcum';
	eval(var_graf) = toastui.Chart.lineChart({ el, data, options });
	// var chartNucleoHoraAcum = toastui.Chart.lineChart({ el, data, options });
	///////CHECK NUCLKEOS ACUMULADOS/////////////
	// Obtener una referencia al checkbox y al gráfico
	// console.log(series)
	// console.log(chartNucleoHoraAcum.getCheckedLegends())
	var selectAllCheckbox = document.getElementById('selNucAcumChK');
	selectAllCheckbox.addEventListener('change', function() {
    var checked = this.checked;

    // Obtener todas las series del gráfico
    // var series = chartNucleoHoraAcum.getDataProvider().getSeriesData();
    // var series = chartNucleoHoraAcum.getSeriesData();
    // Seleccionar o deseleccionar todas las series según el estado del checkbox
    if (checked) {
        series1.forEach(function(seriesInfo) {
            // chartNucleoHoraAcum.selectSeries(seriesInfo);
			chartNucleoHoraAcum.showSeriesDataLabel();
        });
    } else {
        series1.forEach(function(seriesInfo) {
			// console.log(seriesInfo)
            // chartNucleoHoraAcum.unselectSeries(seriesInfo);
            chartNucleoHoraAcum.hideSeriesDataLabel();
			// chartNucleoHoraAcum.unselectSeries("SUCRE");
        });
    }
});	
	///////CHECK NUCLKEOS ACUMULADOS/////////////	
	//////////////////////////
	/// MOVILIZACION HORA
    var movilizacion = @json($movilizacion);
    var max_hora_movilizacion = @json($max_hora_movilizacion);
    var el = document.getElementById('grf-resumen-hora');
    var categories = movilizacion.map(item => item.hora);
    var cantidadData = movilizacion.map(item => item.cant);
    var acumuladoData = movilizacion.map(item => parseInt(item.acumulado));
    var data = {
        categories: categories,
        series: [
            {
                name: 'Cantidad',
                data: cantidadData,
            },
            {
                name: 'Acumulado',
                data: acumuladoData,
            },
        ],
    };
	var theme = {
		series: {
			lineWidth: 5,
			colors: ['#4407ed', '#012e7a'],
			dataLabels: {
				fontFamily: 'arial',
				fontSize: 10,
				fontWeight: 'bold',
				useSeriesColor: false,
				textBubble: {
					visible: true,
					paddingY: 3,
					paddingX: 6,
					arrow: {
						visible: true,
						width: 5,
						height: 5,
						direction: 'bottom'
					}
				}
			}
		},	
		exportMenu: {
			button: {
				backgroundColor: '#000000',
				borderRadius: 5,
				borderWidth: 2,
				borderColor: '#000000',
				xIcon: {
					color: '#ffffff',
					lineWidth: 3,
				},
				dotIcon: {
					color: '#ffffff',
					width: 10,
					height: 3,
					gap: 1,
				},
			},
		},		
	}
	var nomarch = obtenerFechaHoraActual()+" Movilización por hora"
    var options = {
        chart: { title: 'Movilización acumulada por hora a las '+max_hora_movilizacion, width: 1000, height: 500 },
        xAxis: {
            title: 'Hora',
        },
        yAxis: {
            title: 'Cantidad',
        },
        tooltip: {
            grouped: true,
        },
        legend: {
            align: 'bottom',
        },
		exportMenu: {
			filename: nomarch
		},
		series: {
			spline: true,
			dataLabels: { 
				visible: true, 
				offsetY: -10 
			},
		},
		theme,
    };
    var chart = toastui.Chart.lineChart({ el, data, options });
	// // /////////MOVILIZACION NUCLEOS
	var nucleos = @json($nucleos);
	var max_hora_nucleos = @json($max_hora_nucleos);
	var el = document.getElementById('grf-nucleos');
	var series = [];
	nucleos.forEach(function(item) {
		series.push({
			name: item.nucleo,
			data: [parseInt(item.acumulado)],
			dataLabels: {
				visible: true,
				formatter: function(value, category, series) {
					return series.name + ': ' + value;
				}
			}
		});
	});
	var data = {
		categories: ['Acumulado'],
		series: series,
	};
	var theme = {
		series: {
			dataLabels: {
				fontSize: 13,
				fontWeight: 500,
				color: '#000',
				textBubble: { visible: true, arrow: { visible: true } },
			},
		},
		exportMenu: {
			button: {
				backgroundColor: '#000000',
				borderRadius: 5,
				borderWidth: 2,
				borderColor: '#000000',
				xIcon: {
					color: '#ffffff',
					lineWidth: 3,
				},
				dotIcon: {
					color: '#ffffff',
					width: 10,
					height: 3,
					gap: 1,
				},
			},
		},
	};
	var nomarch = obtenerFechaHoraActual()+" Movilización por núcleo a las "+max_hora_nucleos
	var options = {
		chart: { title: 'Movilización acumulada por núcleo a las '+max_hora_nucleos, width: 1200, height: 1000 },
		series: {
          selectable: true,
          dataLabels: {
            visible: true,
          },
        },
		xAxis: {
			title: 'Núcleo',
		},
		yAxis: {
			title: 'Acumulado',
		},
		tooltip: {
			grouped: true,
		},
		legend: {
			align: 'bottom',
		},
		exportMenu: {
			filename: nomarch
		},
		theme,
	};
	var chart2 = toastui.Chart.barChart({ el, data, options });
	/////////MOVILIZACION ESTADOS
	var estados = @json($estados);
	var max_hora_estados = @json($max_hora_estados);
	var el = document.getElementById('grf-estados');
	var series = [];
	estados.forEach(function(item) {
		series.push({
			name: item.estado,
			data: [parseInt(item.acumulado)],
			dataLabels: {
				visible: true,
				formatter: function(value, category, series) {
					return series.name + ': ' + value;
				}
			}
		});
	});
	var data = {
		categories: ['Acumulado'],
		series: series,
	};
	var theme = {
		series: {
			dataLabels: {
				fontSize: 13,
				fontWeight: 500,
				color: '#000',
				textBubble: { visible: true, arrow: { visible: true } },
			},
		},
		exportMenu: {
			button: {
				backgroundColor: '#000000',
				borderRadius: 5,
				borderWidth: 2,
				borderColor: '#000000',
				xIcon: {
					color: '#ffffff',
					lineWidth: 3,
				},
				dotIcon: {
					color: '#ffffff',
					width: 10,
					height: 3,
					gap: 1,
				},
			},
		},
	};
	var nomarch = obtenerFechaHoraActual()+" Movilización por estado a las "+max_hora_estados
	var options = {
		chart: { title: 'Movilización acumulada por estado'+max_hora_estados, width: 800, height: 1000 },
		series: {
          selectable: true,
          dataLabels: {
            visible: true,
          },
        },
		xAxis: {
			title: 'estado',
		},
		yAxis: {
			title: 'Acumulado',
		},
		tooltip: {
			grouped: true,
		},
		legend: {
			align: 'bottom',
		},
		exportMenu: {
			filename: nomarch
		},
		theme,
	};
	var chart3 = toastui.Chart.barChart({ el, data, options });
	/////////MOVILIZACION TIPOS
	var tipos = @json($tipos);
	var max_hora_tipos = @json($max_hora_tipos);
	var el = document.getElementById('grf-tipos');
	var series = [];
	tipos.forEach(function(item) {
		series.push({
			name: item.tipo,
			data: [parseInt(item.acumulado)],
			dataLabels: {
				visible: true,
				formatter: function(value, category, series) {
					return series.name + ': ' + value;
				}
			}
		});
	});
	var data = {
		categories: ['Acumulado'],
		series: series,
	};
	var theme = {
		series: {
			dataLabels: {
				fontSize: 13,
				fontWeight: 500,
				color: '#000',
				textBubble: { visible: true, arrow: { visible: true } },
			},
		},
		exportMenu: {
			button: {
				backgroundColor: '#000000',
				borderRadius: 5,
				borderWidth: 2,
				borderColor: '#000000',
				xIcon: {
					color: '#ffffff',
					lineWidth: 3,
				},
				dotIcon: {
					color: '#ffffff',
					width: 10,
					height: 3,
					gap: 1,
				},
			},
		},
	};
	var nomarch = obtenerFechaHoraActual()+" Movilización por tipo de elector a las "+max_hora_tipos
	var options = {
		chart: { title: 'Movilización acumulada por elector'+max_hora_tipos, width: 800, height: 1000 },
		series: {
          selectable: true,
          dataLabels: {
            visible: true,
          },
        },
		xAxis: {
			title: 'estado',
		},
		yAxis: {
			title: 'Acumulado',
		},
		tooltip: {
			grouped: true,
		},
		legend: {
			align: 'bottom',
		},
		exportMenu: {
			filename: nomarch
		},
		theme,
	};
	var chart4 = toastui.Chart.barChart({ el, data, options });

	function obtenerFechaHoraActual() {
		let fecha = new Date();
		let dia = String(fecha.getDate()).padStart(2, '0');
		let mes = String(fecha.getMonth() + 1).padStart(2, '0'); // Los meses en JavaScript empiezan en 0
		let año = fecha.getFullYear();
		let horas = String(fecha.getHours()).padStart(2, '0');
		let minutos = String(fecha.getMinutes()).padStart(2, '0');
		let segundos = String(fecha.getSeconds()).padStart(2, '0');
		let fechaFormateada = año + '-' + mes + '-' + dia + ' ' + horas + ':' + minutos + ':' + segundos;
		return fechaFormateada;
	}




});	


</script>
@stop
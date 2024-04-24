@extends('adminlte::page')
@section('title','Trabajadores')
@section('content_header')
    <meta name="_token" content="{{ csrf_token() }}">
    <h1 class="m-0 text-dark">Trabajadores</h1>
@stop
@section('content')
    <!-- Modal Editar -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-success mb-4" title="Agregar trabajador" id="agregar_trabajador">
            <i class="fas fa-plus"></i>
        </button>
    </div>
    <div class="modal fade" id="mdl-trabajadores" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" data-bs-backdrop="static">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="row" id="personal">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>CÉDULA<span class="requerido">*</span></label><br/>
                            <input id="txt_cedula" class="editar-campo form-control" type="number"> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            <label>NOMBRE<span class="requerido">*</span></label><br/>
                            <input id="txt_nombre" class="editar-campo form-control" type="text">
                        </div>
                    </div> 
                    <hr/>
                    <div class="row" id="hora_hora_voto">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>VOTÓ</label><br/>
                            <label id="lbl_voto" class="ver-campo"></label>
                            <select class="editar-campo form-control" id="selVoto">
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>HORA</label><br/>
                            <label id="lbl_hora" class="ver-campo"></label>
                            <input id="txt_hora" class="editar-campo form-control" type="time">
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>ESTADO<span class="requerido">*</span></label><br/>
                            <label id="lbl_estado" class="ver-campo"></label>
                            <select id="selEstado" class="editar-campo form-control">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>MUNICIPIO<span class="requerido">*</span></label><br/>
                            <label id="lbl_municipio" class="ver-campo"></label>
                            <select id="selMunicipio" class="editar-campo form-control">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>PARROQUIA<span class="requerido">*</span></label><br/>
                            <label id="lbl_parroquia" class="ver-campo"></label>
                            <select id="selParroquia" class="editar-campo form-control">
                                <option value="">Seleccione</option>                                
                            </select>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>GABINETE<span class="requerido">*</span></label><br/>
                            <label id="lbl_gabinete" class="ver-campo"></label>
                            <select id="selGabinete" class="editar-campo form-control">
                                <option value="">Seleccione</option>                                
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>ENTE<span class="requerido">*</span></label><br/>
                            <label id="lbl_ente" class="ver-campo"></label>
                            <select id="selEnte" class="editar-campo form-control">
                                <option value="">Seleccione</option>                                
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <label>DEPENDENCIA<span class="requerido">*</span></label><br/>
                            <label id="lbl_dependencia" class="ver-campo"></label>
                            <select id="selDependencia" class="editar-campo form-control">
                                <option value="">Seleccione</option>                                
                            </select>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <label>TELÉFONO</label><br/>
                            <label id="lbl_telefono" class="ver-campo"></label>
                            <input id="txt_telefono" class="editar-campo form-control">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-7 offset-md-1" >
                            <label id="lbl_observaciones" class="ver-campo col"></label>
                            <label >OBSERVACIONES</label><br/>
                            <textarea id="txt_observaciones" class="editar-campo form-control"></textarea>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="dismiss">Cerrar</button>
                    <button type="button" id="accept" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Ver -->
    <div class="table-container">
        <div class="scrollup">
            <div class="text-center">
                <a href="#" class="bajar" title="Bajar al final de la tabla"><i class="fas fa-arrow-alt-circle-down" style="font-size: 18px;"></i></a>
            </div>
            <div class="text-center">
                <a href="#" class="subir" title="Subir al inicio de la tabla"><i class="fas fa-arrow-alt-circle-up" style="font-size: 18px;"></i></a>
            </div>
        </div>
        <table 
            id="tbl-trabajadores" 
            class="table table-hover" 
            data-toggle="table" 
            data-show-columns="true" 
            data-url="{{route('trab_tabla')}}" 
            data-side-pagination="server" 
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
            data-filter-control="true" 
            data-show-search-clear-button="true" 
            data-show-multi-sort="true" 
            data-show-print="true" 
            data-locale="es-ES"
            data-search="true"
            data-search-accent-neutralise="true"
        >
            <thead>
                <tr>
                    <th colspan="13">LISTADOD DE TRABAJADORES</th>
                </tr>
                <tr>
                    <th data-formatter="operateFormatter" data-events="operateEvents"></th>
                    <th data-field="cedula" data-sortable="true">CEDULA</th>
                    <th data-field="nombre" data-sortable="true">NOMBRE</th>
                    <th data-field="estado" data-filter-control="select" data-filter-data-onload="true" data-sortable="true">ESTADO</th>
                    <th data-field="municipio" data-filter-control="select" data-sortable="true">MUNICIPIO</th>
                    <th data-field="parroquia" data-filter-control="select" data-sortable="true">PARROQUIA</th>
                    <th data-field="gabinete" data-visible="false" data-filter-control="select" data-sortable="true">GABINETE</th>
                    <th data-field="ente" data-filter-control="select" data-sortable="true">ENTE</th>
                    <th data-field="nombre_dependencia" data-visible="false" data-filter-control="select" data-sortable="true">DEPENDENCIA</th>
                    <th data-field="telefono" data-visible="false">TELÉFONO</th>
                    <th data-field="voto"  data-visible="true" data-filter-control="select" data-sortable="true">VOTÓ</th>
                    <th data-field="observaciones" data-visible="false" data-filter-control="select" data-sortable="true">OBSERVACIONES</th>
                    <th data-field="hora_voto" data-visible="true" data-filter-control="select" data-sortable="true">HORA VOTO</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
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
    <link href="{{ URL::asset('assets/libs/tui-chart/tui-chart.min.css') }}" rel="stylesheet">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
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
    <script src="{{ asset('/assets/libs/tui-chart/tui-chart.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                let todosElemento = $("a:contains('NaN')");
                todosElemento.first().text("Todos");
            }, 1000);
            $.ajax({
                type: "GET",
                url: "{{ route('auxiliars.main.workers') }}",
                headers: {
                    "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                },
                dataType: "JSON",
                success: function (response) {
                    $.each(response[0], function (index, item) {
                        $('#selEstado').append($('<option>', { 
                            value: item.id,
                            text : item.estado 
                        }));
                    });
                    $.each(response[1], function (index, item) {
                        $('#selGabinete').append($('<option>', { 
                            value: item.id_gabinete,
                            text : item.gabinete 
                        }));
                    });
                },
            });          
            $('.subir').click(function(){
                 $("html, body").animate({ scrollTop: 0 }, 600);
            });
            $(".bajar").click(function() {
                var tableHeight = $("#tbl-trabajadores")[0].scrollHeight;
                $("html, body").animate({ scrollTop: tableHeight }, 600);
            });  
        });
        function operateFormatter(value, row, index) {
            let btns=[];
            @php
                $usrChk = auth()->check() && auth()->user()->can('admin.workers.check');
                $usrViw = auth()->check() && auth()->user()->can('admin.workers.view');
                $usrEdt = auth()->check() && auth()->user()->can('admin.workers.edit');
                $usrDes = auth()->check() && auth()->user()->can('admin.workers.destroy');
            @endphp
            @if($usrChk)
                btn_check = ['<form> @csrf <a class="chequear " href="javascript:void(0)" title="Chequear">',
                    '<i class="fas fa-check text-info"></i>',
                    '</a></form>  '].join('')
            @else
                btn_check = ''
            @endif            
            @if($usrViw)
                btn_view =['<a class="ver " href="javascript:void(0)" title="Ver">',
                        '<i class="fas fa-eye text-success"></i>',
                        '</a>  '].join('')
            @else
                btn_view = ''
            @endif            
            @if($usrEdt)
                btn_edit = ['<a class="editar " href="javascript:void(0)" title="Editar">',
                        '<i class="fas fa-edit text-primary"></i>',
                        '</a>  '].join('')
            @else
                btn_edit = ''
            @endif            
            @if($usrDes)
                btn_destroy = ['<a class="eliminar" href="javascript:void(0)" title="Eliminar">',
                        '<i class="fas fa-trash text-danger"></i>',
                        '</a>'].join('')
            @else
                btn_destroy = ''
            @endif            

            btns = [
                btn_check,btn_view,btn_edit,btn_destroy
            ].join('');
            return[btns];
        }
        window.operateEvents = {
            'click .chequear': function(e, value, row, index) {
                Swal.fire({
                    title: 'Ingrese la hora',
                    html:
                    '<input id="swal-input1" class="swal2-input" type="time" required>',
                    showCancelButton: true,
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar',
                    preConfirm: () => {
                        const horaVoto = $('#swal-input1').val();
                        if (!horaVoto) {
                            Swal.showValidationMessage('Por favor ingrese la hora');
                        }
                        return horaVoto;
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        var data = {
                            cedula: row['cedula'],
                            voto: 'SI',
                            hora_voto: result.value,
                        };
                        $.ajax({
                            type: "POST",
                            url: "/trabajador/check",
                            data: data,
                            headers: {
                                "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                            },
                            dataType: "JSON",
                            success: function (response) {
                                $('#tbl-trabajadores').bootstrapTable('refresh');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'HORA REGISTRADA EXITOSAMENTE',
                                    showConfirmButton: 'Cerrar'
                                });
                            },
                        });                    
                    }
                });
            },
            'click .ver': function(e, value, row, index) {
                $(".ver-campo").show();
                $("#hora_hora_voto").show();
                $(".editar-campo").hide();
                $("#personal").hide();
                $(".requerido").hide();
                $("#modal-title").html("Ficha del trabajador "+row['cedula']+" "+row["nombre"]);
                $("#lbl_voto").html(row["voto"]);
                $("#lbl_hora").html(row["hora_voto"]);
                $("#lbl_estado").html(row["estado"]);
                $("#lbl_municipio").html(row["municipio"]);
                $("#lbl_parroquia").html(row["parroquia"]);
                $("#lbl_gabinete").html(row["gabinete"]);
                $("#lbl_ente").html(row["ente"]);
                $("#lbl_dependencia").html(row["nombre_dependencia"]);
                $("#lbl_telefono").html(row["telefono"]);
                $("#lbl_observaciones").html(row["observaciones"]);
                $("#dismiss").show();
                $("#accept").hide();
                $("#mdl-trabajadores").modal("show")
            },
            'click .editar': function(e, value, row, index) {
                $(".ver-campo").hide();
                $("#hora_hora_voto").show();
                $("#personal").hide();
                $(".editar-campo").show();
                $(".requerido").show();
                $("#modal-title").html("Editar trabajador "+row['cedula']+" "+row["nombre"]);
                $("#dismiss").show();
                $("#accept").show();
                $("#selVoto").val(row["voto"]);
                $("#txt_hora").val(row["hora_voto"]);
                $("#txt_telefono").val(row["telefono"]);
                $("#txt_observaciones").val(row["observaciones"]);
                ci = row['cedula'];
                $.ajax({
                    type: "POST",
                    url:   "{{ route('workers.get.worker') }}",
                    data: {ci:ci},
                    headers: {
                        "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                    },
                    dataType: "JSON",
                    success: function (response) {
                        $("#selEstado").val(response.id_estado).trigger('change');
                        setTimeout(() => {
                            $("#selMunicipio").val(response.id_municipio).trigger('change');
                            setTimeout(() => {
                                $("#selParroquia").val(response.id_parroquia);
                            }, 250);
                        }, 250);
                        $("#selGabinete").val(response.id_gabinete).trigger('change');
                        setTimeout(() => {
                            $("#selEnte").val(response.id_ente).trigger('change');
                            setTimeout(() => {
                                $("#selDependencia").val(response.id_dependencia);
                            }, 350);
                        }, 350);
                    },
                });  
                $("#mdl-trabajadores").modal("show")
            },
            'click .eliminar': function(e, value, row, index) {
                Swal.fire({
                    title: 'ADVERTENCIA',
                    html: '¡Esta acción <strong style="color:#f00;">ELIMINARÁ AL TRABAJADOR</strong>! ¿Está seguro que desea continuar',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "DELETE",
                            url: "trabajadores/"+row['cedula'],
                            headers: {
                                "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                            },
                            dataType: "JSON",
                            success: function (response) {
                                $('#tbl-trabajadores').bootstrapTable('refresh');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'TRABAJADOR ELIMINADO EXITOSAMENTE',
                                    text: 'El trabajador '+response.nombre+', CI '+ response.cedula+' ha sido borrado exitosamente',
                                    showConfirmButton: 'Cerrar'
                                });
                            },
                        });                    
                    }
                });
            }
        };
        $('#selEstado').on('change',function(){
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url:   "{{ route('auxiliars.states.municipality') }}",
                data: {id: id},
                headers: {
                    "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                },
                dataType: "JSON",
                success: function (response) {
                    $('#selMunicipio').empty();
                    $('#selParroquia').empty();
                    $('#selMunicipio').append($('<option>', { 
                            value: "",
                            text : "Seleccione"
                        }));                        
                    $.each(response, function (index, item) {
                        $('#selMunicipio').append($('<option>', { 
                            value: item.municipio_id,
                            text : item.municipio
                        }));
                    });
                },
            });  
        })
        $('#selMunicipio').on('change',function(){
            var id_estado = $("#selEstado").val();
            var id_municipio = $(this).val();
            $.ajax({
                type: "POST",
                url:  "{{ route('auxiliars.municipality.parish') }}",
                data: {id_estado: id_estado,id_municipio},
                headers: {
                    "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                },
                dataType: "JSON",
                success: function (response) {
                    $('#selParroquia').empty();
                    $('#selParroquia').append($('<option>', { 
                            value: "",
                            text : "Seleccione"
                        }));                        
                    $.each(response, function (index, item) {
                        $('#selParroquia').append($('<option>', { 
                            value: item.parroquia_id,
                            text : item.parroquia
                        }));
                    });
                },
            });
        });
        $('#selGabinete').on('change',function(){
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url:   "{{ route('auxiliars.cabinet.entity') }}",
                data: {id: id},
                headers: {
                    "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                },
                dataType: "JSON",
                success: function (response) {
                    $('#selEnte').empty();
                    $('#selDependencia').empty();
                    $('#selEnte').append($('<option>', { 
                            value: "",
                            text : "Seleccione"
                        }));                        
                    $.each(response, function (index, item) {
                        $('#selEnte').append($('<option>', { 
                            value: item.id_ente,
                            text : item.ente
                        }));
                    });
                },
            });  
        })
        $('#selEnte').on('change',function(){
            var id_gabinete = $("#selGabinete").val();
            var id_ente = $(this).val();
            $.ajax({
                type: "POST",
                url:  "{{ route('auxiliars.entity.dependency') }}",
                data: {id_gabinete: id_gabinete,id_ente:id_ente},
                headers: {
                    "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                },
                dataType: "JSON",
                success: function (response) {
                    $('#selDependencia').empty();
                    $('#selDependencia').append($('<option>', { 
                            value: "",
                            text : "Seleccione"
                        }));                        
                    $.each(response, function (index, item) {
                        $('#selDependencia').append($('<option>', { 
                            value: item.id_dependencia,
                            text : item.nombre_dependencia
                        }));
                    });
                },
            });
        });
        $("#accept").on('click',function(e) {
            e.preventDefault();
            let titulo = $("#modal-title").html();
            if (titulo.includes("Editar")) {
                let data = {
                    cedula: titulo.match(/\d+/g)[0],
                    voto: $("#selVoto").val(),
                    hora_voto: $("#txt_hora").val(),
                    id_estado: $("#selEstado").val(),
                    id_municipio: $("#selMunicipio").val(),
                    id_parroquia: $("#selParroquia").val(),
                    id_gabinete: $("#selGabinete").val(),
                    id_ente: $("#selEnte").val(),
                    id_dependencia: $("#selDependencia").val(),
                    telefono: $("#txt_telefono").val(),
                    observaciones: $("#txt_observaciones").val(),
                }
                if(data.voto == "SI" && data.hora_voto =="") {
                    alert("Si indicó que votó, debe colocar la hora en la cual votó ")
                } else {
                    $.ajax({
                        type: "POST",
                        url:  "{{ route('workers.update.worker') }}",
                        data: data,
                        headers: {
                            "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                        },
                        dataType: "JSON",
                        success: function (response) {
                            if (response.status != 200) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'HA OCURRIDO UN ERROR',
                                    text: 'Ha ocurrido un error y el trabajador no ha sido actualizado. Inforeme a Soporte Técnico',
                                    showConfirmButton: 'Cerrar'
                                });                                    
                            } else {
                                $('#tbl-trabajadores').bootstrapTable('refresh');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'REGISTRO ACTUALIZADO EXITOSAMENTE',
                                    text: 'Se han actualizado exitosamente los datos del trabajador',
                                    showConfirmButton: 'Cerrar'
                                });                                    
                            }
                        },
                    });                        
                }
                $("#mdl-trabajadores").modal("hide")
            } else {
                let data = {
                cedula:$("#txt_cedula").val(),
                nombre:$("#txt_nombre").val(),
                id_estado:$("#selEstado").val(),
                id_municipio:$("#selMunicipio").val(),
                id_parroquia:$("#selParroquia").val(),
                id_gabinete:$("#selGabinete").val(),
                id_ente:$("#selEnte").val(),
                id_dependencia:$("#selDependencia").val(),
                telefono:$("#txt_telefono").val(),
                observaciones:$("#txt_observaciones").val(),
            };
            $.ajax({
                type: "POST",
                url:   "{{ route('admin.workers.store') }}",
                data: data,
                headers: {
                    "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.errors) {
                        let errores = '';
                        let campos=[];
                        $.each(response.errors, function(llave, valor) {
                            errores += '<li style="text-align:left !important;">'+campo(valor[0])+'</li>'
                            $("#"+llave).addClass('bg-danger');
                            campos.push(llave[0]);
                        });
                        errores = '<ul>'+errores+'</ul>'
                        Swal.fire({
                                icon: 'warning',
                                title: 'SE HAN ENCONTRADO LOS SIGUIENTES ERRORES!',
                                html: errores,
                                showConfirmButton: 'Cerrar'
                            }).then((result) => {
                            if (result.isConfirmed) {
                                setTimeout(function() {
                                    $.each(response.errors, function(k, v) {
                                        $("#"+convertir(k)).addClass('bg-danger');
                                    });
                                },250);
                            }
                        });               
                        
                    }
                }
            }); 
            }                

        });
        $('#mdl-trabajadores').on('hidden.bs.modal', function (e) {
            $("#modal-title").html('');
            $('#mdl-trabajadores').find('input, textarea, select').not('button').val('');
            $('.editar-campo').removeClass('bg-danger');
        });
        $("#agregar_trabajador").on('click',function() {
            $(".ver-campo").hide();
            $("#hora_hora_voto").hide();
            $(".editar-campo").show();
            $(".requerido").show();
            $("#personal").show();
            $("#selVoto").val('NO');
            $("#mdl-trabajadores").modal("show")
        });
        $("#txt_cedula").on('blur',function() {
            $(this).removeClass('bg-danger');
            if($("#txt_cedula").val()!='') {
                $.ajax({
                    type: "POST",
                    url:  "{{ route('workers.ci.check') }}",
                    data: {'cedula':$("#txt_cedula").val()},
                    headers: {
                        "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if (response[0]==1) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'LA CEDULA '+$("#txt_cedula").val()+" YA ESTÁ REGISTRADA",
                                text: 'Ya se encuentra registrada la Cédula de Identidad '+$("#txt_cedula").val()+' y no puede ser registrada; por favor revise e intente de nuevo',
                                showConfirmButton: 'Cerrar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $("#txt_cedula").addClass('bg-danger');
                                    $("#txt_cedula").val('');
                                    setTimeout(function() {
                                        $("#txt_cedula").focus();
                                    },500);
                                }
                            });
                        } else {
                            let electoral = JSON.parse(response[1]);
                            if (electoral.nombre =='FALLECIDO') {
                                Swal.fire({
                                    icon: 'warning',
                                    title: '¡ELECTOR FALLECIDO!',
                                    text: 'La cédula de identidad '+$("#txt_cedula").val()+' aparece como perteneciente a un elector fallecido en el Registro Electoral y por lo tanto no se puede registrar en este sistema; revise e intente de nuevo',
                                    showConfirmButton: 'Cerrar'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    $("#txt_cedula").addClass('bg-danger');
                                    $("#txt_cedula").val('');
                                    $("#txt_nombre").val('');
                                    setTimeout(function() {
                                        $("#txt_cedula").focus();
                                    },500);
                                }
                            });
                            }  else if (electoral.nombre =='NO INSCRITO EN RE') {
                                Swal.fire({
                                    icon: 'warning',
                                    title: '¡NO INSCRITO EN EL RE!',
                                    text: 'La cédula de identidad '+$("#txt_cedula").val()+' no aparece inscrito en el Registro Electoral y por lo tanto no se puede registrar en este sistema; revise e intente de nuevo',
                                    showConfirmButton: 'Cerrar'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    $("#txt_cedula").addClass('bg-danger');
                                    $("#txt_cedula").val('');
                                    $("#txt_nombre").val('');
                                    setTimeout(function() {
                                        $("#txt_cedula").focus();
                                    },500);
                                }
                            });
                            } else {
                                $("#txt_cedula").removeClass('bg-danger');
                                $("#txt_nombre").val(electoral.nombre);
                                $("#selEstado option:contains('"+electoral.estado+"')").prop('selected', true).trigger('change');
                                setTimeout(() => {
                                    $("#selMunicipio option:contains('"+electoral.municipio+"')").prop('selected', true).trigger('change');
                                    setTimeout(() => {
                                        $("#selParroquia option:contains('"+electoral.parroquia+"')").prop('selected', true).trigger('change');
                                    }, 250);
                                }, 250);
                            }
                        }
                    },
                });
            }
        })
        function convertir(dato) {
            switch(dato) {
                case 'cedula':
                    return 'txt_cedula';
                    break;
                case 'nombre':
                    return 'txt_nombre';
                    break;
                case 'id_estado':
                    return 'selEstado';
                    break;
                case 'id_municipio':
                    return 'selMunicipio';
                    break;
                case 'id_parroquia':
                    return 'selParroquia';
                    break;
                case 'id_gabinete':
                    return 'selGabinete';
                    break;
                case 'id_ente':
                    return 'selEnte';
                    break;
                case 'id_dependencia':
                    return 'selDependencia';
                    break;
                case 'telefono':
                    return 'txt_telefono';
                    break;
                case 'observaciones':
                    return 'txt_observaciones';
                    break;
            }
        }
        function campo(dato) {
            let subcadena,campo,mensaje='';
            if (dato.indexOf("id estado") >-1) {
                subcadena="id estado"
            } else if (dato.indexOf("id ente") >-1) {
                subcadena="id ente" 
            } else if(dato.indexOf("telefono") >-1) {
                subcadena = 'telefono'
            } else {
                subcadena = dato.substring(9,dato.indexOf(' e'));
            }
            switch(subcadena) {
                case 'cedula':
                    campo = 'Cédula';
                    break;
                case 'nombre':
                    campo = 'Nombre';
                    break;
                case 'id estado':
                    campo = 'Estado';
                    break;
                case 'id municipio':
                    campo = 'Municipio';
                    break;
                case 'id parroquia':
                    campo = 'Parroquia';
                    break;
                case 'id gabinete':
                    campo = 'Gabinete';
                    break;
                case 'id ente':
                    campo = 'Ente';
                    break;
                case 'id dependencia':
                    campo = 'Dependencia';
                    break;
                case 'telefono':
                    campo = 'Teléfono';
                    break;
                case 'observaciones':
                    campo = 'Observaciones';
                    break;
            }
            mensaje = dato.replace(subcadena,campo);
            return mensaje;
        }
        $(".editar-campo").on('change', function() {
            let id = $(this).prop('id');
            if ($(this).val() !='' && $(this).hasClass('bg-danger')) {
                $(this).removeClass('bg-danger');
            } else if($(this).val() =='' && !$(this).hasClass('bg-danger')) {
                $(this).addClass('bg-danger')
            }
        })
    </script>
@stop

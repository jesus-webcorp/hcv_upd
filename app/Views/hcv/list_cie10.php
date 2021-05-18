<script src="../../assets/lib/jquery/jquery.js"></script>

<link href="../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="../../assets/lib/select2/css/select2.min.css" rel="stylesheet">
<link href="../../assets/lib/SpinKit/spinkit.css" rel="stylesheet">



<div id="loader" class="modal fade show" style="display: none; padding-left: 0px;">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="d-flex ht-300 pos-relative align-items-center">
            <div class="sk-chasing-dots">
                <div class="sk-child sk-dot1 bg-red-800"></div>
                <div class="sk-child sk-dot2 bg-green-800"></div>
            </div>
        </div>
    </div>
</div>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title"><?=$title?></h6>
            <p class="mg-b-20 mg-sm-b-30"><?=$description?></p>

            <div class="alert alert-success" id="succes-alert" role="alert" style="display: none;">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="d-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                    <span><strong>CORRECTO!</strong> <span id="success"></span></span>
                </div><!-- d-flex -->
            </div><!-- alert -->

            <div class="alert alert-danger" id="error-alert" role="alert" style="display: none;">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="d-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-close alert-icon tx-24"></i>
                    <span><strong>ERROR!</strong><span id="error"></span></span>
                </div><!-- d-flex -->
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="" class="btn btn-warning pd-x-20" data-toggle="modal" data-target="#modabulk">Actualizar Catalogo CIE1O Completo</a><br><br>
                </div>
            </div>
            <!-- MODAL CREATE-->
            <div id="modaldemo1" class="modal fade">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                    <div class="modal-content bd-0 tx-14">
                        <div class="modal-header pd-y-20 pd-x-25">
                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Insertar Nuevo Grado Academico</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form id="create_form" method="POST">
                            <div class="modal-body pd-25">
                                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                    <h6 class="card-body-title">Nuevo Grado Academico</h6>
                                    <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Nombre de pago: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <input type="text" class="form-control" name="KEY" placeholder="CLAVE" required>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-20">
                                        <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <textarea rows="2" class="form-control" name="ACADEMIC_FORMATION" placeholder="FORMACION ACADEMICA" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row mg-t-20">
                                        <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <textarea rows="2" class="form-control" name="GROUP" placeholder="GRUPO" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row mg-t-20">
                                        <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <textarea rows="2" class="form-control" name="DEGREE" placeholder="GRADO" required></textarea>
                                        </div>
                                    </div>
                                </div><!-- card -->
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button id="submit_form_new" class="btn btn-info pd-x-20">Insertar Grado Academico</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div><!-- modal-dialog -->
            </div><!-- modal -->


            <!-- MODAL BULK-->
            <div id="modabulk" class="modal fade">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                    <div class="modal-content bd-0 tx-14">
                        <div class="modal-header pd-y-20 pd-x-25">
                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">ACTUALIZACION DE CATALOGO COMPLETO</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="update_bulk" method="POST">
                            <div class="modal-body pd-25">
                                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                    <h6 class="card-body-title">SELECCIONE ARCHIVO</h6>
                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Nombre de pago: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <input id="complete_catalog" type="file" class="custom-file-input" name="catalog" placeholder="CATALOGO" required>
                                            <span class="custom-file-control">EXPLORAR</span>
                                        </div>
                                    </div><!-- row -->
                                </div><!-- card -->
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button id="submit_form_bulk" type="submit" class="btn btn-info pd-x-20">Actualizar Grado Academico</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
                        </div>
                        
                    </div>
                </div><!-- modal-dialog -->
            </div><!-- modal -->



            <div class="table-responsive">
                <table id="datatable1" class="table display responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid">
                    <thead>
                        <tr>
                        <th>CONSECUTIVO</th>
                        <th>LETRA</th>
                        <th>CATALOG_KEY</th>
                        <th>NOMBRE</th>
                        <th>CODIGOX</th>
                        <th>LSEX</th>
                        <th>LINF</th>
                        <th>LSUP</th>
                        <th>TRIVIAL</th>
                        <th>ERRADICADO</th>
                        <th>N_INTER</th>
                        <th>NIN</th>
                        <th>NINMTOBS</th>
                        <th>COD_SIT_LESION</th>
                        <th>NO_CBD</th>
                        <th>CBD</th>
                        <th>NO_APH</th>
                        <th>AF_PRIN</th>
                        <th>DIA_SIS</th>
                        <th>CLAVE_PROGRAMA_SIS</th>
                        <th>COD_COMPLEMEN_MORBI</th>
                        <th>DIA_FETAL</th>
                        <th>DEF_FETAL_CM</th>
                        <th>DEF_FETAL_CBD</th>
                        <th>CLAVE_CAPITULO</th>
                        <th>CAPITULO</th>
                        <th>LISTA1</th>
                        <th>GRUPO1</th>
                        <th>LISTA5</th>
                        <th>RUBRICA_TYPE</th>
                        <th>YEAR_MODIFI</th>
                        <th>YEAR_APLICACION</th>
                        <th>VALID</th>
                        <th>PRINMORTA</th>
                        <th>PRINMORBI</th>
                        <th>LM_MORBI</th>
                        <th>LM_MORTA</th>
                        <th>LGBD165</th>
                        <th>LOMSBECK</th>
                        <th>LGBD190</th>
                        <th>NOTDIARIA</th>
                        <th>NOTSEMANAL</th>
                        <th>SISTEMA_ESPECIAL</th>
                        <th>BIRMM</th>
                        <th>CVE_CAUSA_TYPE</th>
                        <th>CAUSA_TYPE</th>
                        <th>EPI_MORTA</th>
                        <th>EDAS_E_IRAS_EN_M5</th>
                        <th>CVE_MATERNAS-SEED-EPID</th>
                        <th>EPI_MORTA_M5</th>
                        <th>EPI_MORBI</th>
                        <th>DEF_MATERNAS</th>
                        <th>ES_CAUSES</th>
                        <th>NUM_CAUSES</th>
                        <th>ES_SUIVE_MORTA</th>
                        <th>ES_SUIVE_MORB</th>
                        <th>EPI_CLAVE</th>
                        <th>EPI_CLAVE_DESC</th>
                        <th>ES_SUIVE_NOTIN</th>
                        <th>ES_SUIVE_EST_EPI</th>
                        <th>ES_SUIVE_EST_BROTE</th>
                        <th>SINAC</th>
                        <th>PRIN_SINAC</th>
                        <th>PRIN_SINAC_GRUPO</th>
                        <th>DESCRIPCION_SINAC_GRUPO</th>
                        <th>PRIN_SINAC_SUBGRUPO</th>
                        <th>DESCRIPCION_SINAC_SUBGRUPO</th>
                        <th>DAGA</th>
                        <th>ASTERISCO</th>
                        <th>PRIN_MM</th>
                        <th>PRIN_MM_GRUPO</th>
                        <th>DESCRIPCION_MM_GRUPO</th>
                        <th>PRIN_MM_SUBGRUPO</th>
                        <th>DESCRIPCION_MM_SUBGRUPO</th>
                        <th>ACCION</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- card -->

        <!--Modal delete-->
        <div id="modal_delete" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" id="delete_form">
                        <div class="modal-body pd-20">
                            <p class="mg-b-5">¿Estas Seguro que quieres eliminar ? </p>
                            <input type="hidden" name="id_delete" id="id_delete">
                        </div>
                    </form>
                    <div class="modal-footer justify-content-center">
                        <button id="submit_form_del" class="btn btn-info pd-x-20">Eliminar</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <div id="modal_update" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar GRADO ACADEMICO</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" id="update_form">
                        <div class="modal-body pd-25">
                            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                <h6 class="card-body-title">Actualizar GRADO ACADEMICO</h6>
                                <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                <div class="row">
                                    <label class="col-sm-4 form-control-label">CLAVE: <span class="tx-danger">*</span></label>
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <input type="text" class="form-control" name="UPDATE_KEY" id="update_key" placeholder="CLAVE" required>
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <label class="col-sm-4 form-control-label">FORMACION ACADEMICA: <span class="tx-danger">*</span></label>
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <input type="text" class="form-control" name="UPDATE_ACADEMIC_FORMATION" id="update_academic_formation" placeholder="FORMACION ACADEMICA" required>
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <label class="col-sm-4 form-control-label">AGRUPACION: <span class="tx-danger">*</span></label>
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <input type="text" class="form-control" name="UPDATE_GROUP" id="update_group" placeholder="AGRUPACION" required>
                                    </div>
                                </div><!-- row -->


                                <div class="row mg-t-20">
                                    <label class="col-sm-4 form-control-label">GRADO: <span class="tx-danger">*</span></label>
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <textarea rows="2" class="form-control" name="UPDATE_DEGREE" id="update_degree" placeholder="GRADO" required></textarea>
                                        <input type="hidden" name="id_upd" id="id_upd">
                                    </div>
                                </div>
                            </div><!-- card -->
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button id="submit_form_upd" class="btn btn-info pd-x-20">Actualizar GRADO ACADEMICO</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <script src="../../assets/lib/datatables/jquery.dataTables.js"></script>
        <script src="../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
        <script src="../../assets/lib/select2/js/select2.min.js"></script>

        <script>
        showUpdateModal();
        sendUpdateModal();
        sendFormNew();
        sendFormDel();
        sendBulk();

        function showUpdateModal(){
            $(document).on('click','.btn-update',function(){
                var url_str = '<?=base_url().'/Hcv_Rest_Academic/getAcademic/'?>';
                $('#loader').toggle();
                let id_buton = $(this).attr('id');
                $('#id_upd').val(id_buton);
                let json = {
                    id: id_buton
                };
                $.ajax({
                    url: url_str,
                    type: "POST",
                    data: JSON.stringify(json),
                    dataType: "JSON",
                    success: function(success) {
                        console.log(success);
                        $('#update_key').val(success.KEY);
                        $('#update_academic_formation').val(success.ACADEMIC_FORMATION);
                        $('#update_group').val(success.GROUP);
                        $('#update_degree').val(success.DEGREE);

                        $('#loader').toggle();
                        $('#modal_update').modal('show');
                    },
                    error: function(xhr, resp, text) {
                        console.log(xhr, resp, text);
                        $('#loader').toggle();
                    }
                });
            });
        }

        function sendUpdateModal(){
            $(document).on('click','#submit_form_upd',function(){
            $('#loader').toggle();
            var url_str = '<?=base_url().'/Hcv_Rest_Academic/update'?>';
            var loginForm = $("#update_form").serializeArray();
            var loginFormObject = {};
            $.each(loginForm,
                function(i, v) {
                    loginFormObject[v.name] = v.value;
                }
            );
            // send ajax
            $.ajax({
                    url: url_str, // url where to submit the request
                    type : "POST", // type of action POST || GET
                    dataType : 'JSON', // data type
                    data : JSON.stringify( loginFormObject ), // post data || get data
                    success : function(result) {
                        console.log(result);
                        if(result.status == 200){
                            $('#success').text(result.messages.success);
                            $('#succes-alert').show();
                            reloadData();
                        }else{
                            $('#error').text(result.error);
                            $('#error-alert').show();
                        }
                        $('#loader').toggle();
                        $('#modal_update').modal('toggle');
                    },
                    error: function(xhr, resp, text) {
                        console.log(xhr, resp, text);
                        $('#loader').toggle();
                        $('#error-alert').show();
                        $('#error').text(' HA OCURRIDO UN ERROR INESPERADO');
                        $('#modal_update').modal('toggle');
                    }
                })
            });
        }

        function sendFormNew(){
            $(document).on('click','#submit_form_new',function(){
            var url_str = '<?=base_url().'/Hcv_Rest_Academic/create'?>';
            $('#loader').toggle();
            var loginForm = $("#create_form").serializeArray();
            var loginFormObject = {};
            $.each(loginForm,
                function(i, v) {
                    loginFormObject[v.name] = v.value;
                }
            );
            // send ajax
            $.ajax({
                    url: url_str, // url where to submit the request
                    type : "POST", // type of action POST || GET
                    dataType : 'json', // data type
                    data : JSON.stringify( loginFormObject ), // post data || get data
                    success : function(result) {
                        if(result.status == 200){
                            console.log(result);
                            $('#success').text(result.messages.success);
                            $('#succes-alert').show();
                            reloadData();
                        }else{
                            $('#error').text(result.error);
                            $('#error-alert').show();
                        }
                        $('#loader').toggle();
                        $('#modaldemo1').modal('toggle');
                    },
                    error: function(xhr, resp, text) {
                        console.log(xhr, resp, text);
                        $('#loader').toggle();
                        $('#error-alert').show();
                        $('#error').text(' HA OCURRIDO UN ERROR INESPERADO');
                        $('#modal_delete').modal('toggle');
                    }
                })
            });
        }

        function sendFormDel(){
            $(document).on('click','#submit_form_del',function(){
            $('#loader').toggle();
            var url_str = '<?=base_url().'/Hcv_Rest_Academic/delete'?>';
            var Form = $("#delete_form").serializeArray();
            var FormObject = {};
            $.each(Form,
                function(i, v) {
                    FormObject[v.name] = v.value;
                }
            );
            $.ajax({
                    url: url_str, 
                    type : "POST", 
                    dataType : 'json', 
                    data : JSON.stringify( FormObject ), 
                    success : function(result) {
                        if(result.status == 200){
                            console.log(result);
                            $('#success').text(result.messages.success);
                            $('#succes-alert').show();
                            reloadData();
                        }else{
                            $('#error').text(result.error);
                            $('#error-alert').show();
                        }
                        $('#loader').toggle();
                        $('#modal_delete').modal('toggle');
                    },
                    error: function(xhr, resp, text) {
                        console.log(xhr, resp, text);
                        $('#loader').toggle();
                        $('#error-alert').show();
                        $('#error').text(' HA OCURRIDO UN ERROR INESPERADO');
                        $('#modal_delete').modal('toggle');
                    }
                })
            }); 
        }

        function sendBulk(){
            $(document).on('click','#submit_form_bulk',function(){
            $('#modabulk').modal('toggle');
            $('#loader').toggle();
            var url_str = '<?=base_url().'/Hcv_Rest_Cie10/bulk'?>';

            var data = new FormData();
            jQuery.each(jQuery('#complete_catalog')[0].files, function(i, file) {
                data.append('complete_catalog-'+i, file);
            });
            $.ajax({
                    url: url_str,
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    method: 'POST',
                    type : "POST", 
                    dataType : 'json',
                    success : function(result) {
                        if(result.status == 200){
                            console.log(result);
                            $('#success').text(result.messages.success);
                            $('#succes-alert').show();
                            reloadData();
                        }else{
                            $('#error').text(result.error);
                            $('#error-alert').show();
                        }
                        $('#loader').toggle();
                        //$('#modabulk').modal('toggle');
                    },
                    error: function(xhr, resp, text) {
                        console.log(xhr, resp, text);
                        $('#loader').toggle();
                        $('#error-alert').show();
                        $('#error').text(' HA OCURRIDO UN ERROR INESPERADO');
                    }
                })
            });
        }


        $(document).on('click','.btn-danger',function(){
            let id = $(this).attr('id');
            $('#id_delete').val(id);
            $('#modal_delete').modal('show');
        })

        
            
        var dataTable = $('#datatable1').DataTable({
            ajax: '<?=base_url().'/Hcv_Rest_Cie10'?>',
            columns: [
                { data: 'CONSECUTIVO' },
                { data: 'LETRA' },
                { data: 'CATALOG_KEY' },
                { data: 'NOMBRE' },
                { data: 'CODIGOX' },
                { data: 'LSEX' },
                { data: 'LINF' },
                { data: 'LSUP' },
                { data: 'TRIVIAL' },
                { data: 'ERRADICADO' },
                { data: 'N_INTER' },
                { data: 'NIN' },
                { data: 'NINMTOBS' },
                { data: 'COD_SIT_LESION' },
                { data: 'NO_CBD' },
                { data: 'CBD' },
                { data: 'NO_APH' },
                { data: 'AF_PRIN' },
                { data: 'DIA_SIS' },
                { data: 'CLAVE_PROGRAMA_SIS' },
                { data: 'COD_COMPLEMEN_MORBI' },
                { data: 'DIA_FETAL' },
                { data: 'DEF_FETAL_CM' },
                { data: 'DEF_FETAL_CBD' },
                { data: 'CLAVE_CAPITULO' },
                { data: 'CAPITULO' },
                { data: 'LISTA1' },
                { data: 'GRUPO1' },
                { data: 'LISTA5' },
                { data: 'RUBRICA_TYPE' },
                { data: 'YEAR_MODIFI' },
                { data: 'YEAR_APLICACION' },
                { data: 'VALID' },
                { data: 'PRINMORTA' },
                { data: 'PRINMORBI' },
                { data: 'LM_MORBI' },
                { data: 'LM_MORTA' },
                { data: 'LGBD165' },
                { data: 'LOMSBECK' },
                { data: 'LGBD190' },
                { data: 'NOTDIARIA' },
                { data: 'NOTSEMANAL' },
                { data: 'SISTEMA_ESPECIAL' },
                { data: 'BIRMM' },
                { data: 'CVE_CAUSA_TYPE' },
                { data: 'CAUSA_TYPE' },
                { data: 'EPI_MORTA' },
                { data: 'EDAS_E_IRAS_EN_M5' },
                { data: 'CVE_MATERNAS-SEED-EPID' },
                { data: 'EPI_MORTA_M5' },
                { data: 'EPI_MORBI' },
                { data: 'DEF_MATERNAS' },
                { data: 'ES_CAUSES' },
                { data: 'NUM_CAUSES' },
                { data: 'ES_SUIVE_MORTA' },
                { data: 'ES_SUIVE_MORB' },
                { data: 'EPI_CLAVE' },
                { data: 'EPI_CLAVE_DESC' },
                { data: 'ES_SUIVE_NOTIN' },
                { data: 'ES_SUIVE_EST_EPI' },
                { data: 'ES_SUIVE_EST_BROTE' },
                { data: 'SINAC' },
                { data: 'PRIN_SINAC' },
                { data: 'PRIN_SINAC_GRUPO' },
                { data: 'DESCRIPCION_SINAC_GRUPO' },
                { data: 'PRIN_SINAC_SUBGRUPO' },
                { data: 'DESCRIPCION_SINAC_SUBGRUPO' },
                { data: 'DAGA' },
                { data: 'ASTERISCO' },
                { data: 'PRIN_MM' },
                { data: 'PRIN_MM_GRUPO' },
                { data: 'DESCRIPCION_MM_GRUPO' },
                { data: 'PRIN_MM_SUBGRUPO' },
                { data: 'DESCRIPCION_MM_SUBGRUPO' },
                { data: "ID" , render : function ( data, type, row, meta ) {
                    return `<button id="`+ data +`" data-target="#modal_update" class="btn btn-primary btn-update pd-x-20">Actualizar</button>
                            <button id="`+ data +`" data-toggle="modal" data-target="#modal_delete" class="btn btn btn-danger pd-x-20">Delete</button>`;
                }}
            ],
            responsive: true,
            language: {
                searchPlaceholder: 'Buscar...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('.alert .close').on('click', function(e) {
            $(this).parent().hide();
        });

        function reloadData(){
            $('#loader').toggle();
            dataTable.ajax.reload();
            $('#loader').toggle();
        }

        </script>
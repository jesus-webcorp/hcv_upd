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

            <div class="alert alert-danger" id="error-alert" role="alert" style="">
        
                <div class="d-flex align-items-center justify-content-start">
                    <span><strong><a href="<?=base_url().'/Hcv_Ficha_Identificacion'?>">COMPLETE SU FICHA DE IDENTIFICACION!</a></strong></span>
                </div><!-- d-flex -->
            </div>

            <div class="col-md-3 sin-padding">
                <a href="" class="btn btn-info pd-x-20" data-toggle="modal" data-target="#modaldemo1">
                    Ficha de identificación
                </a><br><br>
            </div>



            
        </div><!-- card -->


        <script src="../../assets/lib/datatables/jquery.dataTables.js"></script>
        <script src="../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
        <script src="../../assets/lib/select2/js/select2.min.js"></script>

        <script>
        showUpdateModal();
        sendUpdateModal();
        sendFormNew();
        sendFormDel();

        function showUpdateModal(){
            $(document).on('click','.btn-update',function(){
                var url_str = '<?=base_url().'/Hcv_Rest_marital_Status/update'?>';
                $('#loader').toggle();
                let id_buton = $(this).attr('id');
                $('#id_upd').val(id_buton);
                let json = {
                    id: id_buton
                };
                $.ajax({
                    url: '<?php echo base_url().'/Hcv_Rest_marital_Status/getStatusMarital/'?>',
                    type: "POST",
                    data: JSON.stringify(json),
                    dataType: "JSON",
                    success: function(success) {
                        console.log(success);
                        $('#update_name').val(success.NAME);
                        $('#update_descripcion').val(success.DESCRIPTION);
                        $('#loader').toggle();
                        $('#modal_update').modal('show');
                    },
                    error: function(xhr, resp, text) {
                        console.log(xhr, resp, text);
                        $('#loader').toggle();
                        alert('on update');
                    }
                });
            });
        }

        function sendUpdateModal(){
            $(document).on('click','#submit_form_upd',function(){
            $('#loader').toggle();
            var url_str = '<?=base_url().'/Hcv_Rest_marital_Status/update'?>';
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
            var url_str = '<?=base_url().'/Hcv_Rest_marital_Status/create'?>';
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
            var url_str = '<?=base_url().'/Hcv_Rest_marital_Status/delete'?>';
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


        $(document).on('click','.btn-danger',function(){
            let id = $(this).attr('id');
            $('#id_delete').val(id);
            $('#modal_delete').modal('show');
        })

        
            
        var dataTable = $('#datatable1').DataTable({
            ajax: '<?=base_url().'/Hcv_Rest_marital_Status/'?>',
            columns: [
                { data: 'NAME' },
                { data: 'DESCRIPTION' },
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
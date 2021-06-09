<script src="<?=base_url()?>/../../assets/lib/jquery/jquery.js"></script>
<script src="<?=base_url()?>/../../assets/lib/jquery-ui/jquery-ui.js"></script>

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
                    <span><strong>ERROR</strong></span>
                </div><!-- d-flex -->
            </div>


            <form method="POST" id="ficha_description">

                <div class="row">


                    <div class="col-md-6 mg-b-30 mg-sm-t-0">
                    </div>

                    <div class="col-md-6 mg-b-30 mg-sm-t-0">
                        <i class="icon ion-person-add tx-100"></i>
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input">
                            <span class="custom-file-control"></span>
                        </label>

                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-5">
                        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">

                            <div class="row">
                                <label class="col-sm-4 form-control-label">Nacionalidad: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="nacionalidad" data-placeholder="Choose country">
                                        <option label="Elige tu nacionalidad"></option>
                                        <option value="USA">United States of America</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="China">China</option>
                                        <option value="Japan">Japan</option>
                                    </select>
                                </div>
                            </div><!-- row -->
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">CURP: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="CURP" class="form-control" placeholder="">
                                </div>

                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Nombre: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="NAME" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Primer Apellido: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="F_LAST_NAME" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Segundo Apellido: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="S_LAST_NAME" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Fecha de nacimiento: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                        <input type="text" name="BIRTHDATE" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
                                    </div>
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Sexo: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="SEX" data-placeholder="Choose country">
                                        <option label="Elige tu sexo"></option>
                                        <option value="Hombre">Hombre</option>
                                        <option value="Mujer">Mujer</option>

                                    </select>
                                </div>
                            </div>


                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Codigo Postal: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon ion-search tx-16 lh-0 op-6"></i></span>
                                        <input type="text" name="ZIP_CODE" class="form-control " placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Delegación o Municipío: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="ID_CAT_MUNICIPALITY" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Estado: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="ID_CAT_STATE_OF_RESIDENCE" class="form-control" placeholder="">
                                </div>
                            </div>


                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Colonia: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="ID_CAT_TOWN" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Calle No Ext y No Int: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="STREET" class="form-control" placeholder="">
                                </div>
                            </div>




                        </div><!-- card -->
                    </div>

                    <div class="col-lg-7">
                        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">

                            <div class="row">
                                <label class="col-sm-4 form-control-label">Telefonos: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="PHONE_NUMBER" class="form-control" placeholder="">
                                </div>
                            </div><!-- row -->
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Identidad de genero: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="ID_CAT_GENDER_IDENTITY" id="genero">
                                        <option label="Elige tu identidad de genero"></option>
                                        <option value="Cisgenero">Cisgenero</option>
                                        <option value="Transgenero">Transgenero</option>
                                        <option value="Transexual">Transexual</option>
                                        <option value="Otro">Otro</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mg-t-20" id="othergender">
                                <label class="col-sm-4 form-control-label">Otro: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="OTHER_GENDER" class="form-control">
                                </div>
                            </div>


                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Lugar de nacimiento: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="BIRTHPLACE" data-placeholder="Choose country">
                                        <option label="Elige tu lugar de nacimiento"></option>
                                        <option value="Otro">Otro</option>

                                    </select>
                                </div>

                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Formación Academica: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="ID_CAT_ACADEMIC" data-placeholder="Choose country">
                                        <option label="Elige el grado de formación"></option>
                                        <option value="Cisgenero">Cisgenero</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Ocupación Actual: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="JOB" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Estado civil: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="ID_CAT_MARITAL_STATUS
" data-placeholder="Choose country">
                                        <option label="Elige tu estado civil"></option>
                                        <option value="Casado">Casado</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Union libre">Union libre</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mg-t-20">

                                <label class="col-sm-4 form-control-label">Religión: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="ID_CAT_RELIGION" data-placeholder="Choose country">
                                        <option label="Elige tu religión"></option>
                                        <option value="Católica">Católica</option>


                                    </select>
                                </div>

                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">¿Te identificas con alguna comunidad indígena? </label>
                                <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                    <label class="ckbox">
                                        <input class="ANSWER_INDIGENOUS_COMUNITY" type="checkbox" value="Si"><span>Si</span>
                                    </label>
                                </div>

                                <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                    <label class="ckbox">
                                        <input class="ANSWER_INDIGENOUS_COMUNITY" type="checkbox" value="No"><span>No</span>
                                    </label>
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">¿Hablas alguna lengua indígena? </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="ANSWER_INDIGENOUS_LENGUAGE"  data-placeholder="Choose country">
                                        <option label="En caso de que si elige una"></option>
                                        <option value="Católica">Católica</option>


                                    </select>
                                </div>
                            </div>


                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">¿Quién proporciona la información? </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="ID_CAT_TUTOR" id="info" data-placeholder="Choose country">
                                        <option label="En caso de que si elige una"></option>
                                        <option value="Paciente">Paciente</option>
                                        <option value="Cuidado primario (tutor)">Cuidado primario (tutor)</option>
                                        <option value="Otro">Otro</option>


                                    </select>
                                </div>
                            </div>
                            
                            <div class="row mg-t-20" id="otherinfo">
                                <label class="col-sm-4 form-control-label">Otro: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="ANSWER_OTHER_TUTOR" class="form-control">
                                </div>
                            </div>



                        </div><!-- card -->
                    </div>


                </div>

            </form>




            
                            <div class="form-layout-footer mg-t-30">
                                <button class="btn btn-info mg-r-5" id="send">Enviar</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </div><!-- form-layout-footer -->

        </div><!-- card -->


        <script src="../../assets/lib/datatables/jquery.dataTables.js"></script>
        <script src="../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
        <script src="../../assets/lib/select2/js/select2.min.js"></script>

        <script>
            
            datacp();
            data_academic();
            function datacp() {
    
        
                    var url_str = '<?=base_url().'/Hcv_Rest_cp'?>';
                
                    var cp = {
                        "search" : "55070",
                        "limit" : "10",
                        "offset": "0"
                        
                    };
                
          
        
                    $.ajax({
                        url: url_str,
                        type: "POST",
                        dataType: 'json',
                        data: JSON.stringify(cp),
                        success: function(result) {
                            if (result.status == 200) {
                                console.log(result);
                                $('#success').text(result.messages.success);
                                $('#succes-alert').show();
                                 //reloadData();
                              
                             
                            } else {
                                $('#error').text(result.error);
                                $('#error-alert').show();
                            }
                            //$('#loader').toggle();
                        
                        },
                        error: function(xhr, resp, text) {
                            console.log(xhr, resp, text);
                            $('#loader').toggle();
                            $('#error-alert').show();
                            $('#error').text(' HA OCURRIDO UN ERROR INESPERADO');
                         
                        }
                    })
               
            }
            
            function data_academic() {
        
                    var url_str = '<?=base_url().'/Hcv_Rest_Academic'?>';
                
                    $.ajax({
                        url: url_str,
                        type: "GET",
                        dataType: 'json',
                        success: function(result) {
                            if (result.id == 200) {
                                console.log(result);
                                $('#success').text(result.messages.success);
                                $('#succes-alert').show();
                                 //reloadData();
                              
                             
                            } else {
                                $('#error').text(result.error);
                                $('#error-alert').show();
                            }
                            //$('#loader').toggle();
                        
                        },
                        error: function(xhr, resp, text) {
                            console.log(xhr, resp, text);
                            $('#loader').toggle();
                            $('#error-alert').show();
                            $('#error').text(' HA OCURRIDO UN ERROR INESPERADO');
                         
                        }
                    })
               
            }
            
        


            $(document).on('click', '.btn-danger', function() {
                let id = $(this).attr('id');
                $('#id_delete').val(id);
                $('#modal_delete').modal('show');
            })




            $('.alert .close').on('click', function(e) {
                $(this).parent().hide();
            });

            function reloadData() {
                $('#loader').toggle();
                sendFormDel.ajax.reload();
                $('#loader').toggle();
            }

            // Datepicker
            $('.fc-datepicker').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });

            $('#datepickerNoOfMonths').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                numberOfMonths: 2
            });


            $(document).ready(function() {
                $('#genero').change(function(e) {
                    if ($(this).val() === "Otro") {
                        $('#othergender').show();
                    } else {
                        $('#othergender').hide();
                    }
                })
            });
            
            $(document).ready(function() {
                $('#info').change(function(e) {
                    if ($(this).val() === "Otro") {
                        $('#otherinfo').show();
                    } else {
                        $('#otherinfo').hide();
                    }
                })
            });
            

        </script>
        
       
      
     
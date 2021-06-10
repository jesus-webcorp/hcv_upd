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
                        <div class="row">
                            <div class="col-md-6 mg-b-30 mg-sm-t-0">
                            </div>
                        </div>
                        <style>
                        /* Style the buttons that are used to open the tab content */
                        .tab button {
                        background-color: inherit;
                        float: left;
                        border: none;
                        outline: none;
                        cursor: pointer;
                        padding: 14px 16px;
                        transition: 0.3s;
                        }
                        /* Change background color of buttons on hover */
                        .tab button:hover {
                        background-color: #ddd;
                        }
                        /* Create an active/current tablink class */
                        .tab button.active {
                        background-color: #ccc;
                        }
                        /* Style the tab content */
                        .tabcontent {
                        display: none;
                        padding: 6px 12px;
                        border: 1px solid #ccc;
                        border-top: none;
                        }
                        </style>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Tab links -->
                                <div class="tab">
                                    <button class="tablinks" onclick="openCity(event, 'Notas')" id="defaultOpen">Signos Vitales Notas y Diagnostico Medico</button>
                                    <button class="tablinks" onclick="openCity(event, 'Nutricion')">Nutrición</button>
                                    <button class="tablinks" onclick="openCity(event, 'Psicologia')">Psicología</button>
                                    <button class="tablinks" onclick="openCity(event, 'Evidecias')">Evidencias</button>
                                    <button class="tablinks" onclick="openCity(event, 'Diagnostico_nut')">Diag. Nut</button>
                                    <button class="tablinks" onclick="openCity(event, 'Indicaciones')">Med e Indicaciones</button>
                                    
                                    
                                </div>
                                <!-- Tab content -->
                                <!--=====================================
                                =  Signos Vitales Notas y Diagnostico Medico  =
                                ======================================-->
                                <div id="Notas" class="tabcontent">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="d-flex mt-2">
                                                        <div class="col-lg-2">
                                                            <i class="fa fa-user display-1"></i>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <p>Nombre del paciente</p>
                                                            <p>Edad</p>
                                                            <p>Sexo</p>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <p>Tipo de Nota</p>
                                                            <p>Psicología/Nutrición/Medicina/Fisioterápia/Especialidad</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mt-3">
                                                        <div class="form-group row">
                                                            <label for="fc" class="col-5 col-form-label text-right">Frecuencia Cardiaca (FC)</label>
                                                            <div class="col-3">
                                                                <input type="text" name="FrecuenciaCardiaca" class="form-control" id="fc">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="fr" class="col-5 col-form-label text-right">Frecuencia Respratoria (FR)</label>
                                                            <div class="col-3">
                                                                <input type="text" name="FrecuenciaRespiratoria" class="form-control" id="fr">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tc" class="col-5 col-form-label text-right">Temperatura Corporal (Temp)</label>
                                                            <div class="col-3">
                                                                <input type="text" name="TemperaturaCorporal" class="form-control" id="tc">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="ta" class="col-5 col-form-label text-right">Tensión Arterial (TA)</label>
                                                            <div class="col-3">
                                                                <input type="text" name="TensiónArterial" class="form-control" id="ta">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="satO2" class="col-5 col-form-label text-right">Saturación de Oxígeno (SatO2)</label>
                                                            <div class="col-3">
                                                                <input type="text" name="SatO2" class="form-control" id="satO2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="glucemia" class="col-5 col-form-label text-right">Glucemia capilar (mg/dl)</label>
                                                            <div class="col-3">
                                                                <input type="text" name="Glucemiacapilar" class="form-control" id="glucemia">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="peso" class="col-5 col-form-label text-right">Peso</label>
                                                            <div class="col-3">
                                                                <input type="text" name="Peso" class="form-control" id="peso">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="talla" class="col-5 col-form-label text-right">Talla</label>
                                                            <div class="col-3">
                                                                <input type="text" name="Talla" class="form-control" id="talla">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="imc" class="col-5 col-form-label text-right">IMC</label>
                                                            <div class="col-3">
                                                                <input type="text" name="IMC" class="form-control" id="imc">
                                                            </div>
                                                        </div>
                                                        <p>Esta nota sera agregada al "Historial Clinico"</p>
                                                        <h4 class="text-center">
                                                            Nota General
                                                        </h4>
                                                        <p>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Debitis minus, quaerat cum eius aliquid obcaecati exercitationem veniam consequatur recusandae hic delectus veritatis mollitia corrupti eum atque ab molestias, possimus consequuntur. Quaerat animi odio illo blanditiis iusto eaque aut laudantium, sint nulla voluptatem vero deserunt quas. Sapiente in deleniti quasi, nobis?</p>
                                                    </div><!--/.col-lg-8-->
                                                    <div class="col-12">
                                                        <div class="jumbotron">
                                                            <select class="custom-select" name="Enfermedad" id="enfermedad"  
                                                         >
                                                            <!--option selected disabled>PREDICTIVO DE NOMBRE</option-->
                                                            <option data-tokens="HEMORROIDES - PERIODO PERINATAL" value="HEMORROIDES - PERIODO PERINATAL">HEMORROIDES - PERIODO PERINATAL</option>
                                                            <option data-tokens="HIPOTENSIÓN - INFECCIOSAS Y PARASITARIAS" value="HIPOTENSIÓN - INFECCIOSAS Y PARASITARIAS">HIPOTENSIÓN - INFECCIOSAS Y PARASITARIAS</option>
                                                            <option data-tokens="ANGINA INESTABLE - EMBARAZO, PARTO Y PUERPERIO" value="ANGINA INESTABLE - EMBARAZO, PARTO Y PUERPERIO">ANGINA INESTABLE - EMBARAZO, PARTO Y PUERPERIO"</option>
                                                            <option data-tokens="EMBOLIA PULMONAR - SISTEMA CIRCULATORIO" value="EMBOLIA PULMONAR - SISTEMA CIRCULATORIO">EMBOLIA PULMONAR - SISTEMA CIRCULATORIO"</option>
                                                            <option data-tokens="ESTENOSIS MITRAL - SISTEMA CIRCULATORIO" value="ESTENOSIS MITRAL - SISTEMA CIRCULATORIO">ESTENOSIS MITRAL - SISTEMA CIRCULATORIO CIRCULATORIO</option>
                                                            <option data-tokens="INFARTO CEREBRAL - SISTEMA CIRCULATORIO" value="INFARTO CEREBRAL - SISTEMA CIRCULATORIO">INFARTO CEREBRAL - SISTEMA CIRCULATORIO</option>
                                                        </select>
                                                        </div>
                                                         
                                                    </div>
                                                    <table class="table table-bordered table-responsive">
                                                        <h4 class="text-center">Historial de diagnósticos</h4>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Enfermedad</th>
                                                                <th scope="col">Grupo</th>
                                                                <th scope="col">Eliminar</th>
                                                                <th scope="col">Fecha</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>ATEROSCLEROSIS</td>
                                                                <td>SISTEMA CIRCULATORIO</td>
                                                                <td>X</td>
                                                                <td>22/03/2020</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PERITONITIS</td>
                                                                <td>SISTEMA DIGESTIVO</td>
                                                                <td>X</td>
                                                                <td>22/03/2020</td>
                                                            </tr>
                                                            <tr>
                                                                <td>HIPERTENSIONES</td>
                                                                <td>SISTEMA CIRCULATORIO</td>
                                                                <td>X</td>
                                                                <td>22/03/2020</td>
                                                            </tr>
                                                            <tr>
                                                                <td>DIABETES MELLITUS</td>
                                                                <td>ENDOCRINAS Y METABOLICAS</td>
                                                                <td>-</td>
                                                                <td>22/03/2020</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_notas" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>
                                                </form>
                                            </div><!-- /.col-12-->
                                        </div><!-- /.row-->
                                    </div><!-- /.container-->
                                </div><!-- /#Notas-->

                                <!--=====================================
                                =            Nutrición            =
                                ======================================-->
                                <div id="Nutricion" class="tabcontent">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">  
                                                        <div class="col-lg-6">
                                                            
                                                        </div><!--/.col-lg-6-->
                                                        <div class="col-lg-6">
                                                            
                                                        </div><!--/.col-lg-6-->
                                                    </div><!--/.row-->
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_nutricion" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>
                                                </form>
                                            </div><!--/.col-12-->
                                        </div><!--/.row-->
                                    </div><!--/.container-->
                                </div><!--/#Nutricion-->

                                <!--=====================================
                                =            Psicología          =
                                ======================================-->
                                <div id="Psicologia" class="tabcontent">
                                    <h4 class="text-center mt-2">Habitos alimenticios</h4>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            
                                                        </div><!--/.col-lg-6-->

                                                        <div class="col-lg-6">
                                                            
                                                        </div><!--/.col-lg-6-->
                                                    </div><!--/.row-->
                                                    
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_nutricionales " class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>
                                                </form>
                                            </div><!--/.col-12-->
                                        </div><!--/.row-->
                                    </div><!--/.container-->
                                </div><!--/#Psicologia-->

                                <!--=====================================
                                =            Evidencias          =
                                ======================================-->
                                <div id="Evidencias" class="tabcontent">
                                    <h3 class="text-danger text-center h4">Exclusivo mujeres</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            
                                                        </div><!--/.col-lg-6-->
                                                        <div class="col-lg-6">
                                                            
                                                        </div><!--/.col-lg-6-->
                                                    </div>  
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_gineco" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>    
                                                </form>
                                            </div><!--col-lg-6-->
                                        </div><!--col-lg-6-->
                                    </div><!--/.contaner -->             
                                </div><!--#Evidencias-->

                                <!--=====================================
                                =            Diag. Nut          =
                                ======================================-->
                                <div id="Diagnostico_nut" class="tabcontent">
                                    <h3 class="h5 text-danger text-center">Exclusivo hombres</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                               
                                                        </div><!--/.col-lg-6-->
                                                        <div class="col-lg-6">
                                                        
                                                        </div><!--/.col-lg-6-->
                                                    </div>  
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_androgenicos" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>  
                                                </form>
                                            </div><!--/.col-12-->
                                        </div><!--/.row-->
                                    </div><!--/.container-->
                                </div><!--#Diagnostico_nut-->

                                <!--=====================================
                                =            Med e Indicaciones         =
                                ======================================-->
                                <div id="Indicaciones" class="tabcontent">
                                    <h3 class="h5 text-danger text-center">Exclusivo menores de 5 años</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            
                                                        </div><!--col-lg-6-->

                                                        <div class="col-lg-6">
                                                            
                                                        </div> <!--col-lg-6-->
                                                    </div>
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_perinatales" class="btn btn-primary mb-2 text-right">Guardar</button>
                                                    </div> 
                                                </form>
                                            </div><!--/.col-12-->
                                        </div><!--/.row-->
                                    </div><!--/.container-->
                                </div><!--/#Indicaciones-->

                            </div><!--col-12-->
                        </div><!--row-->
                        </div><!-- card -->
                        <script>
                        sendFormDel();
                        function sendFormDel() {
                        $(document).on('click', '#send', function() {
                        $('#loader').toggle();
                        var url_str = '<?=base_url().'/Hcv_Rest_marital_Status/delete'?>';
                        var Form = $("#ficha_description").serializeArray();
                        var FormObject = {};
                        $.each(Form,
                        function(i, v) {
                        FormObject[v.name] = v.value;
                        }
                        );
                        $.ajax({
                        url: url_str,
                        type: "POST",
                        dataType: 'json',
                        data: JSON.stringify(FormObject),
                        success: function(result) {
                        if (result.status == 200) {
                        console.log(result);
                        $('#success').text(result.messages.success);
                        $('#succes-alert').show();
                        reloadData();
                        } else {
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
                        function openCity(evt, cityName) {
                        // Declare all variables
                        var i, tabcontent, tablinks;
                        // Get all elements with class="tabcontent" and hide them
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                        }
                        // Get all elements with class="tablinks" and remove the class "active"
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        // Show the current tab, and add an "active" class to the button that opened the tab
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                        
                        
                        
                        
                        }
                        
                        document.getElementById("defaultOpen").click();
                        </script>
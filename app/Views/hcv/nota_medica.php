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
                        /*Estilos al boton de subir archivo*/
                        label[for="evidencias"] {
                           font-size: 1rem;
                           color: #fff;
                           background-color: #106BA0;
                           display: inline-block;
                           -webkit-transition: all .5s;
                           transition: all .5s;
                           cursor: pointer;
                           padding: .3rem 1.5rem !important;
                           width: -webkit-fit-content;
                           width: -moz-fit-content;
                           width: fit-content;
                           text-align: center;
                           border-radius: .25rem;
                        }
                        input[type="file"]#evidencias {
                           width: 0.1px;
                           height: 0.1px;
                           opacity: 0;
                           overflow: hidden;
                           position: absolute;
                           z-index: -1;
                        }
                        .border{
                            border: 1px solid black !important;
                            padding: 10px;
                        }
                        .notas{
                            height: 550px;
                            width: auto;
                            overflow-y: scroll;
                        }
                        </style>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Tab links -->
                                <div class="tab">
                                    <button class="tablinks" onclick="openCity(event, 'Notas')" id="defaultOpen">Signos Vitales Notas y Diagnostico Medico</button>
                                    <button class="tablinks" onclick="openCity(event, 'Nutricion')">Nutrición</button>
                                    <button class="tablinks" onclick="openCity(event, 'Psicologia')">Psicología</button>
                                    <button class="tablinks" onclick="openCity(event, 'Evidencias')">Evidencias</button>
                                    <button class="tablinks" onclick="openCity(event, 'Diagnostico_nut')">Diagnostico Nutricional </button>
                                    <button class="tablinks" onclick="openCity(event, 'Indicaciones')">Medicamentos e indicaciones</button>
                                    
                                    
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
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex mt-2">
                                                                <div class="col-4 col-sm-2">
                                                                    <i class="fa fa-user display-1"></i>
                                                                </div>
                                                                <div class="col-4 col-sm-4">
                                                                    <p>Nombre del paciente</p>
                                                                    <p>Edad</p>
                                                                    <p>Sexo</p>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                    <p>Tipo de Nota</p>
                                                                    <p>Psicología/Nutrición/Medicina/Fisioterápia/Especialidad</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 mt-3">
                                                            <div class="form-group row">
                                                                <label for="fc" class="col-8 col-sm-5 col-form-label text-right">Frecuencia Cardiaca (FC)</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="FrecuenciaCardiaca" class="form-control" id="fc">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="fr" class="col-8 col-sm-5 col-form-label text-right">Frecuencia Respratoria (FR)</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="FrecuenciaRespiratoria" class="form-control" id="fr">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="tc" class="col-8 col-sm-5 col-form-label text-right">Temperatura Corporal (Temp)</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="TemperaturaCorporal" class="form-control" id="tc">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="ta" class="col-8 col-sm-5 col-form-label text-right">Tensión Arterial (TA)</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="TensiónArterial" class="form-control" id="ta">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="satO2" class="col-8 col-sm-5 col-form-label text-right">Saturación de Oxígeno (SatO2)</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="SatO2" class="form-control" id="satO2">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="glucemia" class="col-8 col-sm-5 col-form-label text-right">Glucemia capilar (mg/dl)</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="Glucemiacapilar" class="form-control" id="glucemia">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="peso" class="col-8 col-sm-5 col-form-label text-right">Peso</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="Peso" class="form-control" id="peso">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="talla" class="col-8 col-sm-5 col-form-label text-right">Talla</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="Talla" class="form-control" id="talla">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="imc" class="col-8 col-sm-5 col-form-label text-right">IMC</label>
                                                                <div class="col-4 col-sm-3">
                                                                    <input type="text" name="IMC" class="form-control" id="imc">
                                                                </div>
                                                            </div>
                                                            <p>Esta nota sera agregada al "Historial Clinico"</p>
                                                            <h4 class="text-center">
                                                                Nota General
                                                            </h4>
                                                            <p class="border">Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Debitis minus, quaerat cum eius aliquid obcaecati exercitationem veniam consequatur recusandae hic delectus veritatis mollitia corrupti eum atque ab molestias, possimus consequuntur. Quaerat animi odio illo blanditiis iusto eaque aut laudantium, sint nulla voluptatem vero deserunt quas. Sapiente in deleniti quasi, nobis?</p>
                                                        </div><!--/.col-lg-8-->
                                                        <div class="col-lg-5 mt-3">
                                                            <div class="border">
                                                                <h6>Notas previas</h6>
                                                                <hr>
                                                                <div class="notas">
                                                                    <div class="d-flex justify-content-between">
                                                                    <p>Operativo</p>
                                                                    <p>12/04/2019</p>
                                                                </div>
                                                                <p class="border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consectetur et aperiam maxime quasi, itaque adipisci, molestias maiores perspiciatis quas.</p>
                                                                 <div class="d-flex justify-content-between">
                                                                    <p>Operativo</p>
                                                                    <p>12/08/2019</p>
                                                                </div>
                                                                <p class="border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consectetur et aperiam maxime quasi, itaque adipisci, molestias maiores perspiciatis quas.</p>
                                                                 <div class="d-flex justify-content-between">
                                                                    <p>Operativo</p>
                                                                    <p>23/11/2020</p>
                                                                </div>
                                                                <p class="border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consectetur et aperiam maxime quasi, itaque adipisci, molestias maiores perspiciatis quas.</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <p>Operativo</p>
                                                                    <p>23/11/2020</p>
                                                                </div>
                                                                <p class="border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consectetur et aperiam maxime quasi, itaque adipisci, molestias maiores perspiciatis quas.</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <p>Operativo</p>
                                                                    <p>23/11/2020</p>
                                                                </div>
                                                                <p class="border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consectetur et aperiam maxime quasi, itaque adipisci, molestias maiores perspiciatis quas.</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <p>Operativo</p>
                                                                    <p>23/11/2020</p>
                                                                </div>
                                                                <p class="border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consectetur et aperiam maxime quasi, itaque adipisci, molestias maiores perspiciatis quas.</p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <select class="custom-select mt-3" name="Enfermedad" id="enfermedad"  
                                                         >
                                                                <!--option selected disabled>PREDICTIVO DE NOMBRE</option-->
                                                                <option data-tokens="HEMORROIDES - PERIODO PERINATAL" value="HEMORROIDES - PERIODO PERINATAL">HEMORROIDES - PERIODO PERINATAL</option>
                                                                <option data-tokens="HIPOTENSIÓN - INFECCIOSAS Y PARASITARIAS" value="HIPOTENSIÓN - INFECCIOSAS Y PARASITARIAS">HIPOTENSIÓN - INFECCIOSAS Y PARASITARIAS</option>
                                                                <option data-tokens="ANGINA INESTABLE - EMBARAZO, PARTO Y PUERPERIO" value="ANGINA INESTABLE - EMBARAZO, PARTO Y PUERPERIO">ANGINA INESTABLE - EMBARAZO, PARTO Y PUERPERIO"</option>
                                                                <option data-tokens="EMBOLIA PULMONAR - SISTEMA CIRCULATORIO" value="EMBOLIA PULMONAR - SISTEMA CIRCULATORIO">EMBOLIA PULMONAR - SISTEMA CIRCULATORIO"</option>
                                                                <option data-tokens="ESTENOSIS MITRAL - SISTEMA CIRCULATORIO" value="ESTENOSIS MITRAL - SISTEMA CIRCULATORIO">ESTENOSIS MITRAL - SISTEMA CIRCULATORIO CIRCULATORIO</option>
                                                                <option data-tokens="INFARTO CEREBRAL - SISTEMA CIRCULATORIO" value="INFARTO CEREBRAL - SISTEMA CIRCULATORIO">INFARTO CEREBRAL - SISTEMA CIRCULATORIO</option>
                                                            </select>
                                                            
                                                            <table class="table table-bordered table-responsive">
                                                                <h4 class="text-center mt-3">Historial de diagnósticos</h4>
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
                                                        </div>
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
                                                        <div class="col-12">
                                                            <div class="d-flex mt-2">
                                                                <div class="col-4 col-sm-2">
                                                                    <i class="fa fa-user display-1"></i>
                                                                </div>
                                                                <div class="col-4 col-sm-4">
                                                                    <p>Nombre del paciente</p>
                                                                    <p>Edad</p>
                                                                    <p>Sexo</p>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                    <p>Tipo de Nota</p>
                                                                    <p>Psicología/Nutrición/Medicina/Fisioterápia/Especialidad</p>
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="col-lg-6">
                                                            
                                                       
                                                            
                                                            <div class="form-group row">
                                                                <label for="cintura" class="col-5 col-form-label text-right">Circ. Cintura (cm)</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Cintura" class="form-control" id="cintura">
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <label for="cadera" class="col-5 col-form-label text-right">Circ. Cadera (cm)</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Cadera" class="form-control" id="cadera">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="pantorrilla" class="col-5 col-form-label text-right">Circ. Pantorrilla (cm)</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Pantorrilla" class="form-control" id="pantorrilla">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="masa_muscular" class="col-5 col-form-label text-right">% de masa Muscular (%)</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Masa_muscular" class="form-control" id="masa_muscular">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="grasa_corporal" class="col-5 col-form-label text-right">% de grasa corporal (%)</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Grasa_corporal" class="form-control" id="grasa_corporal">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="grasa_visceral" class="col-5 col-form-label text-right">% de grasa Visceral (%)</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Grasa_visceral" class="form-control" id="grasa_visceral">
                                                                </div>
                                                            </div>
                                                        
                                                        </div><!--/.col-lg-6-->  
                                                        <div class="col-lg-6">
                                                                <div class="form-group row">
                                                                <label for="agua_corporal" class="col-5 col-form-label text-right">% Agua corporal total (%)</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Agua_corporal" class="form-control" id="agua_corporal">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="tasa_metabolica" class="col-5 col-form-label text-right">Tasa Metabólica basal</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Tasa_metabolica" class="form-control" id="tasa_metabolica">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="edad_metabolica" class="col-5 col-form-label text-right">Edad metabólica</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Edad_metabolica" class="form-control" id="edad_metabolica">
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
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
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex mt-2">
                                                                <div class="col-4 col-sm-2">
                                                                    <i class="fa fa-user display-1"></i>
                                                                </div>
                                                                <div class="col-4 col-sm-4">
                                                                    <p>Nombre del paciente</p>
                                                                    <p>Edad</p>
                                                                    <p>Sexo</p>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                    <p>Tipo de Nota</p>
                                                                    <p>Psicología/Nutrición/Medicina/Fisioterápia/Especialidad</p>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group row">
                                                                <label for="metodo_intervencion" class="col-6 col-form-label text-right">Técnica/método de intervención</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Metodo_intervencion" class="form-control" id="metodo_intervencion">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="tipo_abordaje" class="col-6 col-form-label text-right">Tipo de Abordaje</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Tipo_abordaje" class="form-control" id="tipo_abordaje">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="estado_emocional" class="col-6 col-form-label text-right">Estado Emocional</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Estado_emocional" class="form-control" id="estado_emocional">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="objetivo_consulta" class="col-6 col-form-label text-right">Objetivo de la consulta</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Objetivo_consulta" class="form-control" id="objetivo_consulta">
                                                                </div>
                                                            </div>
                                                        </div><!--/.col-lg-6-->
                                                    </div><!--/.row-->
                                                    
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_psicologia" class="btn btn-primary mb-2 text-right">Guardar</button> 
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
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex mt-2">
                                                                <div class="col-4 col-sm-2">
                                                                    <i class="fa fa-user display-1"></i>
                                                                </div>
                                                                <div class="col-4 col-sm-4">
                                                                    <p>Nombre del paciente</p>
                                                                    <p>Edad</p>
                                                                    <p>Sexo</p>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                    <p>Tipo de Nota</p>
                                                                    <p>Psicología/Nutrición/Medicina/Fisioterápia/Especialidad</p>
                                                                </div>
                                                            </div> 
                                                            <div class="text-center mt-2">
                                                                <label for="evidencias">Subir archivo<i class="fa fa-paperclip pl-2"></i></label>
                                                                <input type="file" name="foto" class="form-control-file btn" id="evidencias">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <h6 class="text-center">Historial de Archivos Subidos</h6>
                                                            <table class="table table-bordered table-responsive">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Operativo</th>
                                                                        <th scope="col">Fecha </th>
                                                                        <th scope="col">Hora</th>
                                                                        <th scope="col">
                                                                            Descripcion
                                                                        </th>
                                                                        <th scope="col">
                                                                           
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Nombre de Operativo</td>
                                                                        <td>20/02/2021</td>
                                                                        <td>16:45</td>
                                                                        <td>
                                                                            Foto
                                                                        </td>
                                                                        <td><a href="">Ver</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nombre de Operativo</td>
                                                                        <td>20/02/2021</td>
                                                                        <td>16:45</td>
                                                                        <td>Radiografia</td>
                                                                        <td><a href="">Ver</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nombre de Operativo</td>
                                                                        <td>20/02/2021</td>
                                                                        <td>16:45</td>
                                                                        <td>Estudios de Laboratorio</td>
                                                                        <td><a href="">Ver</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nombre de Operativo</td>
                                                                        <td>20/02/2021</td>
                                                                        <td>16:45</td>
                                                                        <td>Foto</td>
                                                                        <td>
                                                                            <a href="">Ver</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>  
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_evidencias" class="btn btn-primary mb-2 text-right">Guardar</button> 
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
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex mt-2">
                                                                <div class="col-4 col-sm-2">
                                                                    <i class="fa fa-user display-1"></i>
                                                                </div>
                                                                <div class="col-4 col-sm-4">
                                                                    <p>Nombre del paciente</p>
                                                                    <p>Edad</p>
                                                                    <p>Sexo</p>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                    <p>Tipo de Nota</p>
                                                                    <p>Psicología/Nutrición/Medicina/Fisioterápia/Especialidad</p>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                        <div class="col-12 col-md-4  mt-3">
                                                            <select class="custom-select mr-sm-5" name="diagnostico" id="diagnostico">
                                                                <option value="Ingesta (NI)">Ingesta (NI)</option>
                                                                <option value="Clinical (NC)">Clinical (NC)</option>
                                                                <option value="Comportamiento ambiental (NB)">Comportamiento ambiental (NB)</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-4  mt-3">
                                                             <select class="custom-select mr-sm-5" name="ingesta" id="ingesta">
                                                                <option value="Balance Calórico/energético (1)">Balance Calórico/energético (1)</option>
                                                                <option value="Ingesta oral o del soporte nutricional">Ingesta oral o del soporte nutricional</option>
                                                                <option value="Ingesta de líquidos (3)">Ingesta de líquidos (3)</option>
                                                                <option value="Ingesta de sustancias bioactiva">Ingesta de sustancias bioactiva</option>
                                                                <option value="Ingesta de nutrientes (5)">Ingesta de nutrientes (5)</option>
                                                                <option value="Funcional (1)">Funcional (1)</option>
                                                                <option value="Bioquimica (2)">Bioquimica (2)</option>
                                                                <option value="Peso (3)">Peso (3)</option>
                                                                <option value="Conocimientos y creencias (1)">Conocimientos y creencias (1)</option>
                                                                <option value="Actividad física y funcionalidad">Actividad física y funcionalidad</option>
                                                                <option value="Acceso a alimentos y seguridad">Acceso a alimentos y seguridad</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-4  mt-3">
                                                            <select class="custom-select mr-sm-5" name="alimentacion" id="alimentacion">
                                                                <option value="Grasa y colesterol">Grasa y colesterol</option>
                                                                <option value="Proteína">Proteína</option>
                                                                <option value="Hidratos de carbono y fibra">Hidratos de carbono y fibra</option>
                                                                <option value="Vitaminas">Vitaminas</option>
                                                                <option value="Minerales">Minerales</option>
                                                                <option value="Multi-nutrientes">Multi-nutrientes</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-5  mt-3">
                                                            <select class="custom-select mr-sm-5" name="ingestas" id="ingestas">
                                                                <option value="Ingesta insuficiente de fibra">Ingesta insuficiente de fibra</option>
                                                                <option value="Ingesta excesiva de fibra">Ingesta excesiva de fibra</option>
                                                                <option value="Ingesta insuficiente de Vitamina">Ingesta insuficiente de Vitamina</option>
                                                                <option value="Ingesta excesiva de vitaminas">Ingesta excesiva de vitaminas</option>
                                                                <option value="Ingesta insuficiente de minerales">Ingesta insuficiente de minerales</option>
                                                                <option value="Ingesta excesiva de minerales">Ingesta excesiva de minerales</option>
                                                                <option value="Riesgo futuro de ingesta subópt">Riesgo futuro de ingesta subópt</option>
                                                                <option value="Riesgo futuro de ingesta excesi">Riesgo futuro de ingesta excesi</option>
                                                            </select> <br>
                                                            <button type="submit" name="Agregar_ingesta" class="btn btn-primary mt-2 text-left">Agregar</button>
                                                        </div>
                                                        <div class="col-lg-5 mt-3">
                                                            <table class="table table-bordered table-responsive">  
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Diagnóstico</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Déficit en el automonitoreo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Desorden en el Patrón alimentario</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Adhesión limitada a recomendaciones relacionadas con la nutrición</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Selección de alimentos indeseable</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
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
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex mt-2">
                                                                <div class="col-4 col-sm-2">
                                                                    <i class="fa fa-user display-1"></i>
                                                                </div>
                                                                <div class="col-4 col-sm-4">
                                                                    <p>Nombre del paciente</p>
                                                                    <p>Edad</p>
                                                                    <p>Sexo</p>
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                    <p>Tipo de Nota</p>
                                                                    <p>Psicología/Nutrición/Medicina/Fisioterápia/Especialidad</p>
                                                                </div>
                                                            </div> 
                                                        </div>

                                                        <div class="col-12 col-md-4 text-center mt-3">
                                                            <select class="custom-select mr-sm-5" name="sustancia" id="sustancia">
                                                                <option selected disabled value="Sustancia Activa">Sustancia Activa</option>
                                                                <option value="Parasetamol">Parasetamol</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-4 text-center mt-3">
                                                            <select class="custom-select mr-sm-5" name="presentacion" id="presentacion">
                                                                <option selected disabled value="Presentación">Presentación</option>
                                                                <option value="Tabletas 500 mg">Tabletas 500 mg</option>
                                                                <option value="Suspensión 100 mg">Suspensión 100 mg</option>
                                                                <option value="Cápsula 800 mg">Cápsula 800 mg</option>
                                                                <option value="Inyecciones 10mg">Inyecciones 10mg</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-4 mt-3 d-flex justify-content-center">
                                                            <textarea name="indicaciones" id="" cols="30" rows="1" placeholder="Indicaciones"></textarea>
                                                            <button type="submit" name="Agregar_ingesta" class="btn btn-primary ml-2">Agregar</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <table class="table table-bordered table-responsive mt-3">  
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Medicamento</th>
                                                                    <th scope="col">Presentación</th>
                                                                    <th scope="col">Cantidad</th>
                                                                    <th scope="col">Unidad</th>
                                                                    <th scope="col">Indicaciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Parasetamol</td>
                                                                    <td>Tabletas 500 mg</td>
                                                                    <td>250</td>
                                                                    <td>mg</td>
                                                                    <td>Tomar c/6 horas</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>Parasetamol</td>
                                                                    <td>Suspensión 100 mg</td>
                                                                    <td>100</td>
                                                                    <td>ml</td>
                                                                    <td>c/6 horas solo si hay dolor</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Parasetamol</td>
                                                                    <td>Capsula 800 mg</td>
                                                                    <td>5</td>
                                                                    <td>mg</td>
                                                                    <td>6 horas</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Parasetamol</td>
                                                                    <td>Inyecciones 10mg</td>
                                                                    <td>1</td>
                                                                    <td>ml</td>
                                                                    <td>6 horas</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Indicaciones</p>
                                                        <p class="border">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum ad consectetur velit vitae omnis, harum in tenetur labore amet exercitationem totam laboriosam. A distinctio ut consequuntur laboriosam architecto iste impedit quos quod eveniet qui culpa similique cupiditate, dolores aspernatur, voluptate eos nam libero, repellendus. Nulla aliquam veniam qui velit.</p>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <label for="evidencias">Receta<i class="fa fa-print pl-2"></i></label>
                                                       
                                                    </div>
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_indicaciones" class="btn btn-primary mb-2 text-right">Guardar</button>
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
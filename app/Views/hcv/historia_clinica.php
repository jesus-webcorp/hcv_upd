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
                            <button class="tablinks" onclick="openCity(event, 'Heredofamiliares')" id="defaultOpen">Heredofamiliares</button>
                            <button class="tablinks" onclick="openCity(event, 'PerNoPatologicos')">PerNoPatologicos</button>
                            <button class="tablinks" onclick="openCity(event, 'Nutricionales')">Nutricionales</button>
                            <button class="tablinks" onclick="openCity(event, 'Ginecoobstetricos')">Ginecoobstetricos</button>
                            <button class="tablinks" onclick="openCity(event, 'Androgenicos')">Androgenicos</button>
                            <button class="tablinks" onclick="openCity(event, 'Perinatales')">Perinatales</button>
                            <button class="tablinks" onclick="openCity(event, 'Psicologicos')">Psicologicos</button>
                            <button class="tablinks" onclick="openCity(event, 'PerPatologicos')">PerPatologicos</button>
                            <button class="tablinks" onclick="openCity(event, 'Ginecoobstetricos')">Notas1raVez</button>
                            
                        </div>

                            <!-- Tab content -->
                                <!--=====================================
                                =            Heredofamiliares            =
                                ======================================-->
                                <div id="Heredofamiliares" class="tabcontent">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="form-group col-12 ">
                                                        <select class="custom-select mr-sm-5" name="rama" id="rama">
                                                            <option selected disabled>Rama</option>
                                                            <option value="Materna">Materna</option>
                                                            <option value="Paterna">Paterna</option>
                                                            <option value="Hermanos">Hermanos</option>
                                                        </select>
                                                        <select class="custom-select mr-sm-5" name="parentesco" id="parentesco">
                                                            <option selected disabled>Parentesco</option>
                                                            <option value="Madre/Padre">Madre/Padre</option>
                                                            <option value="Abuelo">Abuelo</option>
                                                            <option value="Abuela">Abuela</option>
                                                            <option value="Tios">Tios</option>
                                                            <option value="Hermanos">Hermanos</option>
                                                        </select>
                                                        <select class="custom-select mr-sm-5" name="enfermedad" id="enfermedad">
                                                            <option selected disabled>Enfermedad</option>
                                                            <option value="Catálogo reducido CIE-10">Catálogo reducido CIE-10</option>
                                                        </select>
                                                        <button type="submit" name="submit_btn" class="btn btn-primary mb-2">Agregar</button>
                                                    </div>
                                                
                                                    <!--Listado de enfermedades-->
                                                    <h3 class="text-center">Listado de enfermedades</h3>
                                                    <table class="table table-bordered table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Rama</th>
                                                                <th scope="col">Parentesco</th>
                                                                <th scope="col">Enfermedad</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Materna</td>
                                                                <td>Mamá</td>
                                                                <td>Diabetes</td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Materna</td>
                                                                <td>Abuela</td>
                                                                <td>Cáncer</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paterna</td>
                                                                <td>Tio</td>
                                                                <td>Hipertenso</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paterna</td>
                                                                <td>Papá</td>
                                                                <td>Prostata</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermanos</td>
                                                                <td>Hermanos</td>
                                                                <td>Colesterol</td>
                                                                <td>delete</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_fam" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=====================================
                                =            PerNoPatologicos            =
                                ======================================-->
                                <div id="PerNoPatologicos" class="tabcontent">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">  
                                                        <div class="col-lg-6">
                                                            <div class="form-group row">
                                                                <label for="talla" class="col-3 col-form-label text-right">Talla actual</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Talla" class="form-control" id="talla" placeholder="cm">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="peso" class="col-3 col-form-label text-right">Peso actual</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Peso" class="form-control" id="peso" placeholder="kg">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="tatuaje" class="col-sm-5 col-form-label ">¿Tiene algún tatuaje?</label>
                                                                <select class="custom-select" name="Tatuaje" id="tatuaje">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="perfo" class="col-sm-10 col-form-label ">¿Tiene algún tipo de perforación estética (piercing)?</label>
                                                                <select class="custom-select" name="Perforacion" id="perfo">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="animales" class="col-sm-5 col-form-label ">¿Convive con animales?
                                                                (Puede agregar más de uno)</label>
                                                                <select class="custom-select" name="Animales" id="animales">
                                                                    <option value="Caninos">Caninos</option>
                                                                    <option value="Felinos">Felinos</option>
                                                                    <option value="Roedores">Roedores</option>
                                                                    <option value="Reptiles">Reptiles</option>
                                                                    <option value="Bovinos">Bovinos</option>
                                                                    <option value="Ovinos">Ovinos</option>
                                                                    <option value="Equinos">Equinos</option>
                                                                </select>

                                                                <button type="submit" name="agregar_animal" class="btn btn-primary ml-3 mb-2">Agregar</button>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="perfo" class="col-sm-6 col-form-label ">La casa en la que habita es...</label>
                                                                <select class="custom-select" name="Casa" id="perfo">
                                                                    <option value="Propia">Propia</option>
                                                                    <option value="Rentada">Rentada</option>
                                                                    <option value="Otra">OtraOtra</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="servicios" class="col-sm-11 col-form-label">Mencione cuales son los servicios de urbanizacion con los que
                                                                cuenta (puede agregar más de uno)</label>
                                                                <select class="custom-select" name="Servicios" id="servicios">
                                                                    <option value="Luz eléctrica">Luz eléctrica</option>
                                                                    <option value="Agua potable">Agua potable</option>
                                                                    <option value="Drenaje">Drenaje</option>
                                                                    <option value="Piso firme">Piso firme</option>
                                                                    <option value="Saneamiento (recolección de basura)">Saneamiento (recolección de basura)</option>
                                                                    <option value="Internet">Internet</option>
                                                                </select>
                                                                <button type="submit" name="agregar_servicio" class="btn btn-primary ml-3 mb-2">Agregar</button>

                                                                <table class="table table-bordered table-responsive">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Servicios</th>
                                                                            <th scope="col">Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Luz eléctrica</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Agua potable</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Drenaje</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Piso firme</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Saneamiento (recoleccion de basura)</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Internet</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_pernopatologicos" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=====================================
                                =            Nutricionales          =
                                ======================================-->
                                <div id="Nutricionales" class="tabcontent">
                                    <h4 class="text-center mt-2">Habitos alimenticios</h4>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="alimentacion" class="col-sm-7 col-form-label ">¿Qué tipo de alimentación tienes?</label>
                                                                <select class="custom-select" name="Alimentacion" id="alimentacion">
                                                                    <option value="Omnivoro">Omnivoro</option>
                                                                    <option value="Vegetariano">Vegetariano</option>
                                                                    <option value="Vegano">Vegano</option>
                                                                    <option value="Carnivoro">Carnivoro</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="tiempos" class="col-8 col-form-label text-right">¿Cuántos tiempos de comida realizas al día?</label>
                                                                <div class="col-4">
                                                                    <input type="text" name="Tiempos" class="form-control" id="tiempos" placeholder="numero abierto">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alimentacion" class="col-sm-7 col-form-label ">¿Realizas tu alimentación principalmente en casa?</label>
                                                                <select class="custom-select" name="Alimentacion" id="alimentacion">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alcohol" class="col-sm-7 col-form-label ">¿Consumes alcohol habitualmente?</label>
                                                                <select class="custom-select" name="Alcohol" id="alcohol">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="tiempos" class="col-6 col-form-label text-center">¿Cuántas copas a la semana?</label>
                                                                <div class="col-4">
                                                                    <input type="text" name="Copas" class="form-control" id="copas" placeholder="numero abierto">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label for="bebiduausual">Tipo de bebida usual </label>
                                                                <div class="form-check ml-5">
                                                                    <input class="form-check-input" type="radio" name="bebida" id="quincemas" value="Destilados" checked>
                                                                    <label class="form-check-label" for="destilados">
                                                                        Destilados
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ml-5">
                                                                    <input class="form-check-input" type="radio" name="bebida" id="fermentados" value="Fermentados" checked>
                                                                    <label class="form-check-label" for="fermentados">
                                                                        Fermentados
                                                                    </label>
                                                                </div>
                                                                <div class="form- ml-5">
                                                                    <input class="form-check-input" type="radio" name="bebida" id="fortificados" value="Fortificados" checked>
                                                                    <label class="form-check-label" for="fortificados">
                                                                        Fortificados
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ml-5">
                                                                    <input class="form-check-input" type="radio" name="bebida" id="otros" value="Otros" checked>
                                                                    <label class="form-check-label" for="otros">
                                                                        Otros<input type="text" name="" class="form-control" id="otros" placeholder="¿Cuáles">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div><!--col-lg-6-->

                                                        <div class="col-lg-6">
                                                            <div class="form-group row">
                                                                <label for="alimentacion" class="col-12 col-form-label">Consumo semanal de los siguientes alimentos</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0" name="consumo" class="form-control" id="copas">
                                                                </div>
                                                                <div class="col-6">
                                                                    <select class="custom-select" name="Alimento" id="alimentacion">
                                                                        <option value="Pescado">Pescado</option>
                                                                        <option value="Carnes rojas">Carnes rojas</option>
                                                                        <option value="Verduras">Verduras</option>
                                                                        <option value="Legumbre">Legumbre</option>
                                                                        <option value="Leguminosa">Leguminosa</option>
                                                                        <option value="Frutas">Frutas</option>
                                                                        <option value="Lacteos">Lacteos</option>
                                                                        <option value="Harinas">Harinas</option>
                                                                        <option value="Azucares">Azucares</option>
                                                                        <option value="Café">Café</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button type="submit" name="agregarAlimento" class="btn btn-primary mb-2 text-right">Agregar</button>
                                                                </div>

                                                                <table class="table table-bordered table-responsive">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Alimento</th>
                                                                            <th scope="col">Cantidad</th>
                                                                            <th scope="col">Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Pollo</td>
                                                                            <td>2</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pescado</td>
                                                                            <td>1</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Carnes rojas</td>
                                                                            <td>3</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Harinas</td>
                                                                            <td>7</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Azucares</td>
                                                                            <td>7</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Café</td>
                                                                            <td>7</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="form-group">
                                                                    <label for="suplemento" class="col-sm-9 col-form-label ">¿Consumes algún tipo de suplemento y/o complemento alimenticio?</label>
                                                                    <select class="custom-select" name="Suplemento" id="suplemento">
                                                                        <option value="Si">Si</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                    <input type="text" name="" class="form-control col-7" id="cuales" placeholder="¿Cuáles">
                                                                </div>
                                                            </div>
                                                        </div><!--col-lg-6-->
                                                    </div><!--row-->
                                                    
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_nutricionales " class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=====================================
                                =            Ginecoobstetricos          =
                                ======================================-->
                                <div id="Ginecoobstetricos" class="tabcontent">
                                    <h3 class="text-danger text-center h4">Exclusivo mujeres</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group row">
                                                                <label for="menarca" class="col-6 col-form-label text-right">Menarca (edad de primera regla)</label>
                                                                
                                                                <div class="col-3">
                                                                    <input type="number" min="0" name="Menarca" class="form-control" id="menarca">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inicio_sexual" class="col-6 col-form-label text-right">Edad de inicio de Vida Sexual Activa</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0"  name="Inicio_sexual" id="inicio_sexual" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="ciclo" class="col-6 col-form-label text-right">Tipo de Ciclo</label>
                                                                <select class="custom-select" name="Ciclo" id="ciclo">
                                                                    <option value="Regular">Regular</option>
                                                                    <option value="Irregular">Irregular</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="embarazos" class="col-6 col-form-label text-right">Número de embarazos</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0"  name="Embarazos" id="embarazos" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="partos" class="col-6 col-form-label text-right">Número de partos</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0"  name="Partos" id="partos" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="cesareas" class="col-6 col-form-label text-right">Número de cesáreas</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0"  name="Cesareas" id="cesareas" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="abortos" class="col-6 col-form-label text-right">Número de abortos</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0"  name="Abortos" id="abortos" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="lactancia" class="col-6 col-form-label text-right">¿Ha dado lactancia materna?</label>
                                                                <select class="custom-select" name="Lactancia" id="lactancia">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="menopausia" class="col-6 col-form-label text-right">Edad de inicio de menopausia</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0" name="Menopausia" id="menopausia" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="parejas" class="col-6 col-form-label text-right">Número de parejas sexuales</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0"  name="parejas" id="parejas" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="enfermedades" class="col-12 col-form-label">Ha presentado alguna enfermedades de transmisión sexual</label>
                                                                <div class="col-12">
                                                                    <select class="custom-select" name="ETS" id="enfermedades">
                                                                        <option value="Sífilis">Sífilis</option>
                                                                        <option value="Tricomonia">Tricomonia</option>
                                                                        <option value="Herpes">Herpes</option>
                                                                        <option value="VIH">VIH</option>
                                                                        <option value="Papilomavi">Papilomavi</option>
                                                                        <option value="Infección">Infección</option>
                                                                        <option value="clamididas">clamididas</option>
                                                                        <option value="Chancro Bl">Chancro Bl</option>
                                                                        <option value="Candidiasi">Candidiasi</option>
                                                                    </select>
                                                                    <button type="submit" name="agregarETS" class="btn btn-primary ml-3 mb-2 text-right">Agregar</button>
                                                                </div>
                                                            </div>
                                                            <table class="table table-bordered table-responsive">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Delete</th>
                                                                        <th scope="col">Enfermedad</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>NINGUNA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Sífilis</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Tricomoniasis</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Herpes Virus Genital</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>VIH/SIDA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Virus del Papiloma Humano</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div><!--col-lg-6-->
                                                    </div>  
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_gineco" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>    
                                                </form>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>

                                <!--=====================================
                                =            Androgenicos          =
                                ======================================-->
                                <div id="Androgenicos" class="tabcontent">
                                    <h3 class="h5 text-danger text-center">Exclusivo hombres</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group row">
                                                                <label for="sexual" class="col-7 col-form-label text-right">Inicio de Vida Sexual Activa (Edad)</label>  
                                                                <div class="col-3">
                                                                    <input type="number" min="0" name="Sexual" class="form-control" id="sexual">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="parejas" class="col-7 col-form-label text-right">Número de parejas sexuales</label>
                                                                <div class="col-3">
                                                                    <input type="number" min="0" name="Parejas" class="form-control" id="parejas">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            
                                                        <div class="form-group row">
                                                                <label for="enfermedades" class="col-12 col-form-label">Ha presentado alguna enfermedades de transmisión sexual</label>
                                                                <div class="col-12">
                                                                    <select class="custom-select" name="ETS" id="enfermedades">
                                                                        <option value="Sífilis">Sífilis</option>
                                                                        <option value="Tricomonia">Tricomonia</option>
                                                                        <option value="Herpes">Herpes</option>
                                                                        <option value="VIH">VIH</option>
                                                                        <option value="Papilomavi">Papilomavi</option>
                                                                        <option value="Infección">Infección</option>
                                                                        <option value="clamididas">clamididas</option>
                                                                        <option value="Chancro Bl">Chancro Bl</option>
                                                                        <option value="Candidiasi">Candidiasi</option>
                                                                    </select>
                                                                    <button type="submit" name="agregarETS" class="btn btn-primary ml-3 mb-2 text-right">Agregar</button>
                                                                </div>
                                                            </div>
                                                            <table class="table table-bordered table-responsive">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Delete</th>
                                                                        <th scope="col">Enfermedad</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>NINGUNA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Sífilis</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Tricomoniasis</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Herpes Virus Genital</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>VIH/SIDA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Virus del Papiloma Humano</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div><!--col-lg-6-->
                                                    </div>  
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_androgenicos" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=====================================
                                =            Perinatales          =
                                ======================================-->
                                <div id="Perinatales" class="tabcontent">
                                    <h3 class="h5 text-danger text-center">Exclusivo menores de 5 años</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group row">
                                                                <label for="embarazo" class="col-6 col-form-label text-right">Número de embarazo del niño</label>  
                                                                <div class="col-3">
                                                                    <input type="number" min="0" name="Embarazo" class="form-control" id="embarazo">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="complicaciones" class="col-7 col-form-label text-right">Complicaciones durante el embarazo</label>
                                                                <select class="custom-select" name="Complicaciones" id="complicaciones">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                                <input type="text" name="" class="form-control col-9 mt-3" id="otros" placeholder="¿Cuáles">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nacimiento" class="col-6 col-form-label text-right">Tipo de nacimiento</label>
                                                                <select class="custom-select" name="Nacimiento" id="nacimiento">
                                                                    <option value="Parto">Parto</option>
                                                                    <option value="Cesárea">Cesárea</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="madre" class="col-6 col-form-label text-right">Edad de la madre al nacimiento</label>  
                                                                <div class="col-3">
                                                                    <input type="number" min="0" name="Madre" class="form-control" id="madre">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="complicacion" class="col-7 col-form-label text-right">¿Presentó alguna complicación durante el nacimiento?</label>
                                                                <select class="custom-select" name="Complicacion" id="complicacion">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                                <input type="text" name="" class="form-control col-9 mt-3" id="otros" placeholder="¿Cuáles">
                                                            </div>
                                                        </div><!--col-lg-6-->

                                                        <div class="col-lg-6">
                                                            <div class="form-group row">
                                                                <label for="semanas" class="col-form-label text-right">Semanas de gestación al nacer</label>  
                                                                <div class="col-3">
                                                                    <input type="number" min="0" name="Semanas" class="form-control" id="semanas">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alimentacion" class=" col-form-label text-right">Alimentación al nacer</label>
                                                                <select class="custom-select" name="Alimentacion" id="alimentacion">
                                                                    <option value="Lactancia materna">Lactancia materna</option>
                                                                    <option value="Otra">Otra</option>
                                                                </select>
                                                                <input type="text" name="" class="form-control col-9 mt-3" id="alimentacion" placeholder="¿Cuáles">
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-5" for="apgar">Calificación de APGAR</label>
                                                                <input type="text" name="APGAR" id="apgar" class="form-control col-md-5" placeholder="calificacion maxima 10/10" required>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-5" for="silverman">Calificación SILVERMAN</label>
                                                                <input type="text" name="SILVERMAN" id="silverman" class="form-control col-md-5" placeholder="calificacion maxima 10/10" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="reanimacion" class="col-7 col-form-label text-right">¿Ameritó reanimación neonatal?</label>
                                                                <select class="custom-select" name="Reanimacion" id="reanimacion">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="estancia" class="col-7 col-form-label text-right">¿Ameritó estancia en incubadora?</label>
                                                                <select class="custom-select" name="Estancia" id="estancia">
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                        </div> <!--col-lg-6-->
                                                    </div>
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_perinatales" class="btn btn-primary mb-2 text-right">Guardar</button>
                                                    </div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=====================================
                                =            Psicologicos          =
                                ======================================-->
                                <div id="Psicologicos" class="tabcontent">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="form-group">
                                                        <label for="intervenciones" class="col-form-label text-right">¿Ha tenido intervenciones psicológicas previas?</label>
                                                        <select class="custom-select" name="Intervenciones" id="intervenciones">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tratamiento" class="col-form-label text-right">¿Ha tenido tratamiento farmacológico previo por cuestiones psicológicas/psiquiatricas?</label>
                                                        <select class="custom-select" name="Tratamiento" id="tratamiento">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="continuacion" class="col-form-label text-right">¿Actualmente continua su tratamiento?</label>
                                                        <select class="custom-select" name="Continuacion" id="continuacion">
                                                            <option value="Si">Sí (especifique qué medicamentos)</option>
                                                            <option value="No">No (especifique el motivo de la suspensión del mismo?</option>
                                                            <textarea class="mt-3" name="textarea" rows="6" cols="50"></textarea>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Necesidad" class="col-form-label text-right">¿Se considera con la necesidad de iniciar o continuar algún tipo de sesión psicológica?</label>
                                                        <select class="custom-select" name="necesidad" id="necesidad">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_psicologicos" class="btn btn-primary mb-2 text-right">Guardar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=====================================
                                =            PerPatologicos          =
                                ======================================-->
                                <div id="PerPatologicos" class="tabcontent">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="POST">
                                                    <div class="form-group">
                                                        <label for="alergia" class="col-form-label text-right">¿Presenta algún tipo de alergia?</label>
                                                        <select class="custom-select" name="Alergia" id="alergia">
                                                            <option selected disabled>Catálogo de Alergias</option>
                                                            <option value="Penicilina">Penicilina</option>
                                                            <option value="Sulfamidas">Sulfamidas</option>
                                                            <option value="Acido Acetilsaliscilico">Acido Acetilsaliscilico</option>
                                                            <option value="Ibuprofeno">Ibuprofeno</option>
                                                        </select>
                                                        <button type="submit" name="agregarAlergia" class="btn btn-primary ml-3 mb-2 text-right">Agregar</button>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="procedimiento" class="col-form-label text-right">¿Se le ha realzado alguna intervención quirurgica/operación?</label>
                                                        <select class="custom-select" name="Procedimiento" id="procedimiento">
                                                            <option selected disabled>Catálogo de Procedimientos</option>
                                                            <option value="LISIS LAPAROSCÓPICA DE ADHERENCIAS PERITONEALES">LISIS LAPAROSCÓPICA DE ADHERENCIAS PERITONEALES</option>
                                                            <option value="OTRO TRASPLANTE DE RIÑÓN">OTRO TRASPLANTE DE RIÑÓN</option>
                                                            <option value="MEATOPLASTIA URETRAL">MEATOPLASTIA URETRAL</option>
                                                            <option value="REPARACIÓN DE PRÓSTATA">REPARACIÓN DE PRÓSTATA</option>
                                                        </select>
                                                        <button type="submit" name="agregarIntervencion" class="btn btn-primary ml-3 mb-2 text-right">Agregar</button>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="transfusion" class="col-form-label text-right">¿Ha presentado alguna transfusión sanguinea?</label>
                                                        <select class="custom-select" name="Transfusion" id="transfusion">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select> <br>
                                                        <textarea class="mt-3" name="textarea" rows="2" cols="50" placeholder="especificar motivo y fecha"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="accidente" class="col-form-label text-right">¿Ha presentado alguna fractura, esguince o luxación?</label>
                                                        <select class="custom-select" name="Accidente" id="accidente">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select> <br>
                                                        <textarea class="mt-3" name="textarea" rows="2" cols="50" placeholder="especificar motivo y fecha"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="infectocontagiosa" class="col-form-label text-right">¿Ha presentado alguna enfermedad de tipo infectocontagiosa?</label>
                                                        <select class="custom-select" name="Infectocontagiosa" id="infectocontagiosa">
                                                            <option value="Catálogo de Enfermedades InfectocontagiosasC IE-10 selección" selected disabled>Catálogo de Enfermedades InfectocontagiosasC IE-10 selección</option>
                                                            <option value="FIEBRE TIFOIDEA">FIEBRE TIFOIDEA</option>
                                                            <option value="CÓLERA">CÓLERA</option>
                                                            <option value="OTRAS HEPATITIS VIRALES CRÓNICAS">OTRAS HEPATITIS VIRALES CRÓNICAS</option>
                                                            <option value="VARICELA CON OTRAS COMPLICACIONES">VARICELA CON OTRAS COMPLICACIONES</option>
                                                        </select>
                                                        <button type="submit" name="agregarEI" class="btn btn-primary ml-3 mb-2 text-right">Agregar</button>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tipica" class="col-form-label text-right">¿Ha presentado alguna enfermedades tipicas de la infancia?</label>
                                                        <select class="custom-select" name="Tipica" id="tipica">
                                                            <option value="Catálogo de Enfermedades de la Infancia" selected disabled>Catálogo de Enfermedades de la Infancia</option>
                                                            <option value="ESCARLATINA">ESCARLATINA</option>
                                                            <option value="DIFTERIA">DIFTERIA</option>
                                                            <option value="SARAMPIÓN">SARAMPIÓN</option>
                                                            <option value="VARICELA">VARICELA</option>
                                                        </select>
                                                        <button type="submit" name="agregarEI" class="btn btn-primary ml-3 mb-2 text-right">Agregar</button>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="comsumo">Consumo de Sustancias</label>
                                                        <div class="form-check ml-5">
                                                            <input class="form-check-input" type="radio" name="sustancias" id="ninguna" value="Ninguna" checked>
                                                            <label class="form-check-label" for="ninguna">
                                                                Ninguna
                                                            </label>
                                                        </div>
                                                        <div class="form-check ml-5">
                                                            <input class="form-check-input" type="radio" name="sustancias" id="tabaco" value="Tabaco" checked>
                                                            <label class="form-check-label" for="tabaco">
                                                                Tabaco
                                                            </label>
                                                        </div>
                                                        <div class="form-check ml-5">
                                                            <input class="form-check-input" type="radio" name="bebida" id="otros" value="Otros" checked>
                                                            <label class="form-check-label" for="otros">
                                                                Otros<input type="text" name="" class="form-control" id="otros" placeholder="¿Cuáles">
                                                            </label>
                                                        </div>                         
                                                    </div>      
                                                    <div class="form-group">
                                                        <label for="periodicidad" class="col-form-label text-right">Especifique cantidad y periodicidad</label> <br>
                                                        <textarea class="mt-3" name="textarea" rows="2" cols="50"></textarea>
                                                    </div>     

                                                    <div class="float-right">
                                                        <button type="submit" name="guardar_perpatologicos" class="btn btn-primary mb-2 text-right">Guardar</button> 
                                                    </div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=====================================
                                =            Notas1raVez          =
                                ======================================-->
                                <div id="Notas1raVez" class="tabcontent">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="text-center">
                                                    Nota Medica de Primera Vez
                                                </h4>
                                                <div class="d-flex justify-content-between">
                                                    <p>Operativo</p>
                                                    <p>12/04/2019</p>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore praesentium, dicta nulla laborum quasi dolorum molestias aliquid veniam cumque hic magni facilis placeat labore omnis laudantium facere harum maxime eum minus nostrum voluptatum eos illum explicabo in. Odio itaque explicabo nisi rerum maiores tempore dicta blanditiis, similique accusantium consequuntur fuga architecto est ab quae culpa, eius minima, nostrum, modi officiis assumenda laborum velit quia. Perspiciatis veritatis exercitationem temporibus? Temporibus ut, minima, vero quos autem repellat ab expedita assumenda culpa eum! Architecto in alias incidunt blanditiis dignissimos atque, deleniti, iusto mollitia doloremque eius, reiciendis asperiores. Quas necessitatibus omnis velit sapiente fugit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
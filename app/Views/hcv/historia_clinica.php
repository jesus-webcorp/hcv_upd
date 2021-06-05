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
                                    <button class="tablinks" onclick="openCity(event, 'Notas1raVez')">Notas1raVez</button>
                                    
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
                                                    <button type="submit" name="guardar_fam" class="btn btn-primary mb-2 text-right">Guardar</button>
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
                                                                <label for="talla" class="col-sm-3 col-form-label text-right">Talla actual</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Talla" class="form-control" id="talla">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="peso" class="col-sm-3 col-form-label text-right">Peso actual</label>
                                                                <div class="col-3">
                                                                    <input type="text" name="Peso" class="form-control" id="peso">
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
                                            <div class="col-lg-6">
                                                <form action="" method="POST">
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
                                                        <label for="tiempos" class="col-sm-8 col-form-label text-right">¿Cuántos tiempos de comida realizas al día?</label>
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
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--=====================================
                                =            Ginecoobstetricos          =
                                ======================================-->
                                <div id="Ginecoobstetricos" class="tabcontent">
                                    <h3>Tokyo</h3>
                                    <p>Tokyo is the capital of Japan.</p>
                                </div>
                                <!--=====================================
                                =            Androgenicos          =
                                ======================================-->
                                <div id="Androgenicos" class="tabcontent">
                                    <h3>Tokyo</h3>
                                    <p>Tokyo is the capital of Japan.</p>
                                </div>
                                <!--=====================================
                                =            Perinatales          =
                                ======================================-->
                                <div id="Perinatales" class="tabcontent">
                                    <h3>Tokyo</h3>
                                    <p>Tokyo is the capital of Japan.</p>
                                </div>
                                <!--=====================================
                                =            Psicologicos          =
                                ======================================-->
                                <div id="Psicologicos" class="tabcontent">
                                    <h3>Tokyo</h3>
                                    <p>Tokyo is the capital of Japan.</p>
                                </div>
                                <!--=====================================
                                =            PerPatologicos          =
                                ======================================-->
                                <div id="PerPatologicos" class="tabcontent">
                                    <h3>Tokyo</h3>
                                    <p>Tokyo is the capital of Japan.</p>
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
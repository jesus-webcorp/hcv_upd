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

<style>
    .clear {
        clear: both !important;
        margin-top: 20px !important;
    }

    #searchResult {
        list-style: none !important;
        padding: 0px !important;
        width: 250px !important;
        position: absolute !important;
        margin-top: 39px;
        min-width: 100%;
        z-index: 99999999999999999999999999999999999999999;
    }

    #searchResult li {
        background: lavender !important;
        padding: 4px !important;
        margin-bottom: 1px !important;
    }

    #searchResult li:nth-child(even) {
        background: #45506B !important;
        color: white !important;
    }

    #searchResult li:hover {
        cursor: pointer !important;
    }

    /* ############  CP SEARCH ############### */

    #cpResult {
        list-style: none !important;
        padding: 0px !important;
        width: 250px !important;
        position: absolute !important;
        margin-top: 39px;
        min-width: 100%;
        z-index: 99999999999999999999999999999999999999999;
    }

    #cpResult li {
        background: lavender !important;
        padding: 4px !important;
        margin-bottom: 1px !important;
    }

    #cpResult li:nth-child(even) {
        background: #45506B !important;
        color: white !important;
    }

    #cpResult li:hover {
        cursor: pointer !important;
    }
</style>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title"><?=$title?></h6>
            <p class="mg-b-20 mg-sm-b-30"><?=$description?></p>

            <!--=====================================
            =            Visitas  =
            ======================================-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <i class="fa fa-user display-4 mr-3"></i>
                        <i class="fa fa-user-md display-4"></i>

                        <form action="" method="post" target="_blank" class="mt-3">
                            <p>
                                <input type="search" name="" placeholder="buscar">
                                Búsqueda por cualquiera de las variables 
                            </p>
                        </form>
                        <table class="table table-bordered table-responsive mt-3">  
                            <thead>
                            <h5 class="text-center mt-3">Visitas</h5>
                                <tr>
                                    <th scope="col">Visita</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">ID de Visita</th>
                                    <th scope="col">Paciente</th>
                                    <th scope="col">Operativo</th>
                                    <th scope="col">Tipo de cita</th>
                                    <th scope="col">Estatus de cita</th>
                                    <th scope="col">Costo total</th>
                                    <th scope="col">Pago paciente</th>
                                    <th scope="col">Pago operativo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>05/05/2020</td>
                                    <td>16:00</td>
                                    <td>10202 - 060520</td>
                                    <td>Jon Doe</td>
                                    <td>Angel Ruiz</td>
                                    <td>psicología</td>
                                    <td>agendada</td>
                                    <td>$700.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>06/05/2020</td>
                                    <td>15:00</td>
                                    <td>10203 - 060520</td>
                                    <td>Patricia Maldonado</td>
                                    <td>por asignar</td>
                                    <td>medicina</td>
                                    <td>pendiente</td>
                                    <td>$850.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>07/05/2020</td>
                                    <td>16:00</td>
                                    <td>10204 - 060520</td>
                                    <td>Ernesto Feria</td>
                                    <td>Luis Morales</td>
                                    <td>nutricion</td>
                                    <td>pendiente</td>
                                    <td>$12500.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>08/05/2020</td>
                                    <td>17:00</td>
                                    <td>10205 - 060520</td>
                                    <td>Raul Ramirez</td>
                                    <td>por asignar</td>
                                    <td>Fisioterapia</td>
                                    <td>agendada</td>
                                    <td>$500.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>09/05/2020</td>
                                    <td>18:00</td>
                                    <td>10206 - 060520</td>
                                    <td>Reina Oliveros</td>
                                    <td>Ernesto Garcia</td>
                                    <td>Especialidad</td>
                                    <td>pendiente</td>
                                    <td>$700.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>10/05/2020</td>
                                    <td>19:00</td>
                                    <td>10207 - 060520</td>
                                    <td>Martha Suarez</td>
                                    <td>por asignar</td>
                                    <td>medicina</td>
                                    <td>agendada</td>
                                    <td>$1300.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>11/05/2020</td>
                                    <td>20:00</td>
                                    <td>10208 - 060520</td>
                                    <td>Arcelia Rivera</td>
                                    <td>por asignar</td>
                                    <td>psicología</td>
                                    <td>agendada</td>
                                    <td>$1500.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>12/05/2020</td>
                                    <td>21:00</td>
                                    <td>10209 - 060520</td>
                                    <td>Ramon Serrano</td>
                                    <td>Graciela Ortiz</td>
                                    <td>medicina</td>
                                    <td>agendada</td>
                                    <td>$1900.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>13/05/2020</td>
                                    <td>22:00</td>
                                    <td>10210 - 060520</td>
                                    <td>Ramon Serrano</td>
                                    <td>Graciela Ortiz</td>
                                    <td>medicina</td>
                                    <td>agendada</td>
                                    <td>$1250.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>14/05/2020</td>
                                    <td>23:00</td>
                                    <td>10211 - 060520</td>
                                    <td>Ramon Serrano</td>
                                    <td>Graciela Ortiz</td>
                                    <td>medicina</td>
                                    <td>agendada</td>
                                    <td>$1650.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>15/05/2020</td>
                                    <td>00:00</td>
                                    <td>10212 - 060520</td>
                                    <td>Ramon Serrano</td>
                                    <td>Graciela Ortiz</td>
                                    <td>medicina</td>
                                    <td>agendada</td>
                                    <td>$550.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>16/05/2020</td>
                                    <td>01:00</td>
                                    <td>10213 - 060520</td>
                                    <td>Ramon Serrano</td>
                                    <td>Graciela Ortiz</td>
                                    <td>medicina</td>
                                    <td>agendada</td>
                                    <td>$430.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td>17/05/2020</td>
                                    <td>02:00</td>
                                    <td>10214 - 060520</td>
                                    <td>Ramon Serrano</td>
                                    <td>Graciela Ortiz</td>
                                    <td>medicina</td>
                                    <td>agendada</td>
                                    <td>$500.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>                                                                            
                            </tbody>
                        </table>
                        
                    </div><!-- /.col-12-->
                </div><!-- /.row-->
            </div><!-- /.container-->
           

        </div><!-- card -->


        <script src="../../assets/lib/datatables/jquery.dataTables.js"></script>
        <script src="../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
        <script src="../../assets/lib/select2/js/select2.min.js"></script>

        <script>
            data_academic();
            sendFormNew();


            function data_academic() {

                var url_str = '<?=base_url().'/Hcv_Rest_Academic'?>';

                $.ajax({
                    url: url_str,
                    type: "GET",
                    dataType: 'json',
                    success: function(result) {
                        if (result.status == 200) {

                            $('#success').text(result);
                            $('#succes-alert').show();
                            //reloadData();

                            let id = result.data
                            let data_length = id.length

                            let academico = document.getElementById("academico")

                            console.log(academico)

                            for (i = 0; i <= data_length; i++) {


                                var option = document.createElement("option");
                                option.innerHTML = id[i].ACADEMIC_FORMATION;
                                option.value = id[i].ID;
                                academico.appendChild(option);
                            }



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

            $(document).ready(function() {

                $("#pepe").keyup(function() {
                    var search = document.getElementById("pepe").value;
                    console.log('si es este: ' + search);
                    var searchresult = document.getElementById("searchResult");
                    var url_str = '<?=base_url().'/Hcv_Rest_Indigenous_L'?>';
                    var language = {
                        "search": search,
                        "limit": "10",
                        "offset": "0"
                   
                    };
                    console.log(language);
                    $.ajax({
                        url: url_str,
                        type: 'POST',
                        dataType: 'json',
                        data: JSON.stringify(language),
                        success: function(response) {
                            let info = response.data;
                            console.log(info);
                            var len = info.length;
                            $("#searchResult").empty();
                            for (var i = 0; i < len; i++) {
                                var id = info[i].ID;
                                var name = info[i].SCIENTIFIC_NAME;
                                console.log("searchResult")

                                $("#searchResult").append("<li value='" + id + "'>" + name + "</li>");

                            }

                            // binding click event to li
                            $("#searchResult li").bind("click", function() {
                                var value = $(this).text();
                                $("#pepe").val(value);
                                $("#searchResult").empty();
                            });
                        }
                    });
                });
            });


            $(document).ready(function() {
                $("#cp_search").keyup(function() {
                    var search2 = document.getElementById("cp_search").value;
                    let searchresult2 = document.getElementById("searchResult");
                    var url_str = '<?=base_url().'/Hcv_Rest_cp'?>';
                    var cp = {
                        "search": search2,
                        "limit": "20",
                        "offset": "0"

                    };
                    if (search2 != "") {
                        let colonia;
                        let alcaldia;
                        let estado;
                        let id;
                        let info;
  
                        $.ajax({
                            url: url_str,
                            type: 'POST',
                            dataType: 'json',
                            data: JSON.stringify(cp),
                            success: function(response) {
                                info = response.data;
                                var len = info.length;
                                $("#cpResult").empty();
                                for (var i = 0; i < len; i++) {
                                     id = info[i].ID;
                                    var cp = info[i].CP;
                                    colonia = info[i].ASENTAMIENTO;
                                    alcaldia = info[i].MUNICIPIO;
                                    estado = info[i].ESTADO;
                                    allinfo = info[i];
                                    $("#cpResult").append("<li value='" + id + "'>" + cp + ", " + colonia + "</li>");
                                }

                                // binding click event to li
                                $("#cpResult li").bind("click", function() {
                                    var value = $(this).text();
                                    var id2 = this.value                            
                                    $("#cp_search").val(value);
                                     console.log(info);
                                     console.log(id2)                        
                                    $("#cpResult").empty();                                    
                                    var len = info.length;                                      
                                    for (var i = 0; i<len; i++) {                                        
                                        if(info[i].ID == id2){
                                        $("#colonia").val(info[i].ASENTAMIENTO);
                                        $("#delegacion").val(info[i].MUNICIPIO);
                                        $("#estado").val(info[i].ESTADO);
                                        console.log(info[i])
                                        }                                    
                                    }
                                });
                            }
                        });
                    }
                });
            });
            
            
        function sendFormNew(){
            $(document).on('click','#submit_ficha',function(){
            var url_str = '<?=base_url().'/Hcv_Rest_Identity/create'?>';
            var loginForm = $("#ficha_description").serializeArray();
            var loginFormObject = {};
            $.each(loginForm,
                function(i, v) {
                    loginFormObject[v.name] = v.value;
                console.log(loginFormObject)
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
                       
                        }else{
                            $('#error').text(result.error);
                            $('#error-alert').show();
                        }
                   
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

            $(document).ready(function() {
                let Checked = null;
                //The class name can vary
                for (let CheckBox of document.getElementsByClassName('check')) {
                    CheckBox.onclick = function() {
                        if (Checked != null) {
                            Checked.checked = false;
                            Checked = CheckBox;
                        }
                        Checked = CheckBox;
                    }
                }
            });    
        </script>
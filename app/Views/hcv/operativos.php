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
        =            Operativos  =
        ======================================-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <i class="fa fa-user display-4 mr-3"></i>
                        <i class="fa fa-user-md display-4"></i>
                        <table class="table table-bordered table-responsive mt-3">  
                            <thead>
                            <h5 class="text-center mt-3">Operativos</h5>
                                <tr>
                                    <th scope="col">Nombre del Operativo</th>
                                    <th scope="col">Servicio</th>
                                    <th scope="col">Servicios Realizados totales</th>
                                    <th scope="col">Notas pendientes</th>
                                    <th scope="col">Visitas por pagar</th>
                                    <th scope="col">Total de Pago Pendiente</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Angy Ruiz</td>
                                    <td>Psicología</td>
                                    <td>24</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>Luis Morales</td>
                                    <td>Medicina</td>
                                    <td>35</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Ernesto Garcia</td>
                                    <td>Nutrición</td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td>Graciela Ortiz</td>
                                    <td>Fisioterapia</td>
                                    <td>24</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>6500</td>
                                </tr>
                                <tr>
                                    <td>David Zepeda</td>
                                    <td>Especialidad</td>
                                    <td>65</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Raul Hernandez</td>
                                    <td>Psicología</td>
                                    <td>23</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>2500</td>
                                </tr>
                                <tr>
                                    <td>Pedro Nieto</td>
                                    <td>Nutrición</td>
                                    <td>21</td>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <td>Armando Lopez</td>
                                    <td>Especialidad</td>
                                    <td>14</td>
                                    <td>5</td>
                                    <td>1</td>
                                    <td>3500</td>
                                </tr>
                                <tr>
                                    <td>Jessica Gomez</td>
                                    <td>Especialidad</td>
                                    <td>54</td>
                                    <td>6</td>
                                    <td>2</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td>Ricardo Lopez</td>
                                    <td>Psicología</td>
                                    <td>20</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>3500</td>
                                </tr>
                                <tr>
                                    <td>Fernando de Lucio</td>
                                    <td>Nutrición</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Ramon Miramontes</td>
                                    <td>Especialidad</td>
                                    <td>36</td>
                                    <td>7</td>
                                    <td>3</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>Elena Santos</td>
                                    <td>Especialidad</td>
                                    <td>21</td>
                                    <td>9</td>
                                    <td>0</td>
                                    <td>4000</td>
                                </tr>
                                <tr>
                                    <td>Susana Escalante</td>
                                    <td>Medicina</td>
                                    <td>14</td>
                                    <td>11</td>
                                    <td>1</td>
                                    <td>1500</td>
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
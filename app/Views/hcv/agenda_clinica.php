<script src="<?= base_url() ?>/../../assets/lib/jquery/jquery.js"></script>
<script src="<?= base_url() ?>/../../assets/lib/jquery-ui/jquery-ui.js"></script>
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
            <h6 class="card-body-title"><?= $title ?></h6>
            <p class="mg-b-20 mg-sm-b-30"><?= $description ?></p>
            
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

            <style>
                body {
                    font-family: Arial, Helvetica, sans-serif;

                }

                th {
                    font-size: 13px;
                    font-weight: normal;
                    padding: 8px;
                    background: #5174DA;
                    border-top: 4px solid #aabcfe;

                    border-bottom: 1px solid #fff;
                    color: #039;
                }

                td {
                    padding: 8px;
                    background: #e8edff;
                    border-bottom: 1px solid #fff;
                    color: #669;
                    border-top: 1px solid transparent;
                }
                .tam{
                    font-size: 2.5rem;
                }
                .no-disponible{
                    background-color: red;
                }
            </style>

            <!--
            <head>

                <meta charset="utf-8">


                <hr>
                <div>

                    <HEAD>
                        <style>
                            body {
                                text-align: center;
                            }

                            .izquierda {
                                width: 50px;
                                height: 50px;
                                font-size: 1px;
                                border-style: solid;
                                border-top-color: #fff;
                                border-left-color: #fff;
                                border-right-color: #000;
                                border-bottom-color: #fff;
                                border-top-width: 25px;
                                border-left-width: 1px;
                                border-right-width: 50px;
                                border-bottom-width: 25px;
                                background-color: #000;
                                padding: 0;
                            }

                            .derecha {
                                width: 50px;
                                height: 50px;
                                font-size: 1px;
                                border-style: solid;
                                border-top-color: #fff;
                                border-left-color: #000;
                                border-right-color: #fff;
                                border-bottom-color: #fff;
                                border-top-width: 25px;
                                border-left-width: 50px;
                                border-right-width: 1px;
                                border-bottom-width: 25px;
                                background-color: #000;
                                padding: 0;
                            }
                        </style>
                    </HEAD>
                            
                    </div>

                    </head>-->

            <div class="container">
                <div class="row">
                    <div class="col-12">                  
                        <div class="d-flex justify-content-between">
                            <div class="flex-column">
                                <p>Tipo de Cita</p>
                                <select name="select">
                                    <option value="value1" selected>Medicina</option>
                                    <option value="value2">Psicología</option>
                                    <option value="value3">Nutrición</option>
                                    <option value="value4">Fisioterapia</option>
                                    <option value="value5">Especialidad</option>
                                    <option value="value6">No se</option>
                                </select>
                            </div>
                            
                            <div class="flex-column">
                                <p>Forma de Pago</p>
                                <select name="select">
                                    <option value="value1" selected>Efectivo</option>
                                    <option value="value2">Deposito</option>
                                    <option value="value3">SPEI</option>
                                    <option value="value4">Tarjeta</option>
                                </select>
                            </div>

                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <div class="align-items-center">
                                <!--<input type="button" class="izquierda" value="" onclick="alert('izquierda')" />
                                <input type="button" class="derecha" value="" onclick="alert('derecha')" />-->
                                <a href=""><i class="fa fa-arrow-circle-left tam"></i></a>
                                <a href=""><i class="fa fa-arrow-circle-right tam"></i></a>
                                <button class="btn mb-3">Todo</button>
                            </div>
                            <div>
                                <button class="btn">Día</button>
                                <button class="btn">Semana</button>
                            </div>                                
                        </div>

                        <h4 class="text-center">Dra.Pamela Flores</h4>
                
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th></th>
                                <th>Lunes</th>
                                <th>Martes</th>
                                <th>Miercoles</th>

                                <th>Jueves</th>
                                <th>Viernes</th>
                                <th>Sabado</th>
                                <th>Domingo</th>
                            </tr
                            >
                            <tr>
                                <td>08:00</td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                            </tr>

                            <tr>
                                <td>09:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="no-disponible"></td>
                            </tr>
                            <tr>
                                <td>10:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="no-disponible"></td>
                            </tr>
                            <tr>
                                <td>13:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>15:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>16:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>17:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>18:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>19:00</td>
                                <td class="no-disponible"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>20:00</td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                                <td class="no-disponible"></td>
                            </tr>

                            <!--<tr>
                                <td>08:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr>
                                <td>09:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                            </tr>

                            <tr>
                                <td>10:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                            </tr>

                            <tr>
                                <td>11:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>12:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>13:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>14:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>15:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>16:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>17:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>18:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>19:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>20:00</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>

                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>-->
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary">Guardar</button>
                        </div>
                    </div><!--col-12-->
                </div><!--row-->
            </div><!--container-->
        </div>
    </div>


</div><!-- card -->

<script>
    sendFormDel();

    function sendFormDel() {
        $(document).on('click', '#send', function() {
            $('#loader').toggle();
            var url_str = '<?= base_url() . '/Hcv_Rest_marital_Status/delete' ?>';
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
<div>

</div>
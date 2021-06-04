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
                        <div id="Heredofamiliares" class="tabcontent">
                            <h3>Alexis</h3>
                            <p>London is the capital city of England.</p>
                        </div>

                        <div id="PerNoPatologicos" class="tabcontent">
                            <h3>Paris</h3>
                            <p>Paris is the capital of France.</p>
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <h3>Tokyo</h3>
                            <p>Tokyo is the capital of Japan.</p>
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
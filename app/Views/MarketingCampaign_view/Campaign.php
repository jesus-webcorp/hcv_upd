<script src="../../assets/lib/jquery/jquery.js"></script>

<link href="../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="../../assets/lib/select2/css/select2.min.css" rel="stylesheet">


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Solimaq</a>
        <span class="breadcrumb-item active">Marketing</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Marketing</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Catálogo de campañas</h6>

            <p></p>

            <div class="col-md-3">
                <a href="" class="btn btn-info pd-x-20" data-toggle="modal" data-target="#modaldemo1">Nueva campaña</a><br><br>
            </div>


            <!-- BASIC MODAL -->
            <div id="modaldemo1" class="modal fade">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                    <div class="modal-content bd-0 tx-14">
                        <div class="modal-header pd-y-20 pd-x-25">
                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Registrar nueva campaña</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form method="POST" action="<?php echo base_url();?>/MarketingCampaign/createCampaign">
                            <div class="modal-body pd-25">
                                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                    <h6 class="card-body-title">Nueva campaña</h6>
                                    <p class="mg-b-20 mg-sm-b-30">Inserte la información correspondiente en los siguientes campos.</p>
                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Nombre de campania: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <label>Escriba el nombre de la campaña</label>
                                            <input type="text" class="form-control" name="name" placeholder="Nombre de la campaña" required/>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row mg-t-20">
                                        <!--  <label class="col-sm-4 form-control-label">Presupuesto<span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Inserte el presupuesto estimado para la campaña</label>
                                        <input type="number" min="0" step="0.01" class="form-control" name="budget" placeholder="Presupuesto" required/>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <!--  <label class="col-sm-4 form-control-label">Presupuesto<span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Inserte el costo total de la campaña</label>
                                        <input type="number" min="0" step="0.01" class="form-control" name="total_cost" placeholder="Costo total"/>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Fecha de inicio <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <label>Seleccione la fecha de inicio</label>
                                            <input type="date" class="form-control" min="<?php echo date("Y-m-d\TH-i");?>" name="date_start" placeholder="Fecha de inicio" required/>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Fecha de fin <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <label>Seleccione la fecha de fin</label>
                                            <input type="date" class="form-control" min="<?php echo date("Y-m-d\TH-i");?>" name="date_end" placeholder="Fecha de fin" required/>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Plataforma de la campaña <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <label>Escriba la plataforma de la campaña</label>
                                            <input type="text" class="form-control" name="channel" placeholder="Plataforma de la campaña" required/>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row mg-t-20">
                                        <!--  <label class="col-sm-4 form-control-label">leads <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Inserte los leads de la campaña</label>
                                        <input type="number" min="0" class="form-control" name="leads" placeholder="Leads" required/>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Empleado asignado <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Seleccione el estatus actual de la campaña</label>
                                        <select class="form-select" name="status" placeholder="Estatus">
                                        <option value="">Seleccione el estado actual</option>
                                        <option value="1">Activa</option>
                                        <option value="0">Terminada</option>
                                        </select>
                                        </div>
                                    </div><!-- row -->


                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Producto <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Seleccione un vendedor a asignar</label>
                                        <select class="form-select" name="id_asigned_user" placeholder="Empleado asignado">
                                        <option value="" name="user">Seleccione el empleado</option>
                                        <?php foreach($employees as $key):?>
                                            <option value="<?php echo $key->id;?>"><?php echo $key->user_name;?></option>
                                        <?php endforeach;?>
                                        </select>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Producto <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Seleccione la máquina o producto</label>
                                        <select class="form-select" name="id_producto" placeholder="Producto">
                                        <option value="" name="producto">Seleccione el producto</option>
                                        <?php foreach($products as $key):?>
                                            <option value="<?php echo $key->id;?>"><?php echo $key->name;?></option>
                                        <?php endforeach;?>
                                        </select>
                                        </div>
                                    </div><!-- row -->

                                </div><!-- card -->
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Registrar campaña</button>
                                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div><!-- modal-dialog -->
            </div><!-- modal -->



            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Nombre</th>
                            <th class="wd-15p">Presupuesto</th>
                            <th class="wd-15p">Costo total</th>
                            <th class="wd-15p">Fecha inicio</th>
                            <th class="wd-15p">Fecha fin</th>
                            <th class="wd-15p">Canal</th>
                            <th class="wd-15p">Leads</th>
                            <th class="wd-15p">Producto</th>
                            <th class="wd-15p">Estatus</th>
                            <th class="wd-10p">Vendedor asignado</th>
                            <th class="wd-20p">Acción</th>
                            <th class="wd-20p"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($get_data_join as $campaign):?>
                        <tr>
                            <td><?php echo $campaign->name;?></td><!--Nombre -->
                            <td><?php echo $campaign->budget;?></td><!--Presupuesto-->
                            <td><?php echo $campaign->total_cost;?></td><!--Presupuesto-->
                            <td><?php echo $campaign->date_start;?></td><!--Fecha inicio-->
                            <td><?php echo $campaign->date_end;?></td><!--Fecha fin-->
                            <td><?php echo $campaign->channel;?></td><!--Canal-->
                            <td><?php echo $campaign->leads;?></td><!--Número de leads-->
                            <td><?php echo $campaign->productname;?></td><!--Máquina o producto-->
                            <td> <?php
                                        if ($campaign->status == 1){
                                            echo "Activa";
                                        } else {
                                            echo "Terminada";
                                        }
                                ?>
                            </td>
                            <td><?php echo $campaign->user_name;?></td><!--Nombre de vendedor asignado-->
                            <td><button id="<?php echo $campaign->id;?>" data-toggle="modal" data-target="#modal_update" class="btn btn-primary btn-update pd-x-20">Actualizar</button></td>
                            <td><button onclick="mandarId(<?php echo $campaign->id;?>)"  data-toggle="modal" data-target="#modal_delete" class="btn btn btn-danger pd-x-20">Eliminar</button></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- card -->

        <!--Modal delete-->
        <div id="modal_delete" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Atención</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?php echo base_url().'/MarketingCampaign/deleteCampaign'?>">
                        <div class="modal-body pd-20">
                            <p class="mg-b-5">¿Está seguro de que quiere eliminar la campaña de marketing? </p>
                            <input  type="hidden" name="id_delete" id="id_delete">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-info pd-x-20">Eliminar</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal"">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <div id="modal_update" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar campaña</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <form method="POST" action="<?php echo base_url().'/MarketingCampaign/updateCampaign'?>">
                        <div class="modal-body pd-25">
                            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                <h6 class="card-body-title">Actualizar campaña</h6>
                                <p class="mg-b-20 mg-sm-b-30">Atención: Seleccionar nuevamente una fecha de inicio o fin reemplazará la anteriormente guardada</p>
                                <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                <input type="hidden" name="id_campaign" id="id_campaign">
                                <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Nombre de campania: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <label>Escriba el nombre de la campaña</label>  
                                            <input type="text" class="form-control" name="update_name" id="update_name" placeholder="Nombre de la campaña" required/>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row">
                                        <!--  <label class="col-sm-4 form-control-label">Presupuesto<span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Inserte el presupuesto estimado para la campaña</label>
                                        <input type="number" min="0" step="0.01" class="form-control" name="update_budget" id="update_budget" placeholder="Presupuesto" required/>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <!--  <label class="col-sm-4 form-control-label">Presupuesto<span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Inserte el costo total de la campaña</label>
                                        <input type="number" min="0" step="0.01" class="form-control" name="update_total_cost" id="update_total_cost" placeholder="Costo total" required/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Fecha de inicio <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <label>Seleccione la fecha de inicio</label>
                                            <input type="date" class="form-control" id="update_date_start"  name="update_date_start" placeholder="Fecha de inicio" />
                                        </div>
                                    </div><!-- row -->

                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Fecha de fin <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Seleccione la fecha de fin</label>
                                        <input type="date" class="form-control" id="update_date_end"  name="update_date_end" placeholder="Fecha de fin"/>                                        
                                        </div>
                                    </div><!-- row -->

                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Plataforma de la campaña <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <label>Escriba la plataforma de la campaña</label>
                                            <input type="text" class="form-control" id="update_channel" name="update_channel" placeholder="Plataforma de la campaña" required/>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row">
                                        <!--  <label class="col-sm-4 form-control-label">leads <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Inserte los leads de la campaña</label>
                                        <input type="number" min="0" step="0.01" class="form-control" id="update_leads" name="update_leads" placeholder="Leads" required/>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Empleado asignado <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Seleccione el estatus actual de la campaña</label>
                                        <select class="form-select" id="update_status" name="update_status" placeholder="Estatus">
                                        <option value="">Estado actual</option>
                                        <option value="1">Activa</option>
                                        <option value="0">Termnada</option>
                                        </select>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Producto <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Seleccione un vendedor a asignar</label>
                                        <select class="form-select" id="update_id_asigned_user" name="update_id_asigned_user" placeholder="Empleado asignado">
                                        <option value="">Vendedores</option>
                                        <?php foreach($employees as $key):?>
                                            <option value="<?php echo $key->id;?>"><?php echo $key->user_name;?></option>
                                        <?php endforeach;?>
                                        </select>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row mg-t-20">
                                        <!--   <label class="col-sm-4 form-control-label">Producto <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <label>Seleccione la máquina o producto</label>
                                        <select class="form-select" id="update_id_producto" name="update_id_producto" placeholder="Producto">
                                        <option value="">Máquina o producto</option>
                                        <?php foreach($products as $key):?>
                                            <option value="<?php echo $key->id;?>"><?php echo $key->name;?></option>
                                        <?php endforeach;?>
                                        </select>
                                        </div>
                                    </div><!-- row -->
                            </div><!-- card -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Actualizar</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>

                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->



        <script src="../../assets/lib/datatables/jquery.dataTables.js"></script>
        <script src="../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
        <script src="../../assets/lib/select2/js/select2.min.js"></script>

        <script>
              $(document).ready(function() {
                        $('.btn-update').on('click', function() {
                            let id_buton = $(this).attr('id');
                            $('#id_campaign').val(id_buton);
                            let json = {
                                id: id_buton
                            };
                            $.ajax({
                                url: '<?php echo base_url().'/MarketingCampaign/getData'?>',
                                type: "POST",
                                data: json,
                                dataType: "JSON",
                                success: function(success) {
                                    let fecha = new Date(success[0].fecha_inicio);
                                    $('#update_name').val(success[0].name);
                                    $('#update_budget').val(success[0].budget);
                                    $('#update_total_cost').val(success[0].total_cost);
                                    $('#update_date_start').val(success[0].fecha_inicio);
                                    $('#update_date_end').val(success[0].fecha_final);
                                    $('#update_channel').val(success[0].channel);
                                    $('#update_leads').val(success[0].leads);
                                    $('#update_id_producto').val(success[0].id_producto);
                                    $('#update_status').val(success[0].status);
                                    $('#update_id_asigned_user').val(success[0].id_asigned_user);
                                }

                            }); //AJAX
                           $('#modal_update').modal('show');
                        });
                
              });//Ready function
            
                        $('#datatable1').DataTable({
                            responsive: true,
                            language: {
                                searchPlaceholder: 'Search...',
                                sSearch: '',
                                lengthMenu: '_MENU_ items/page',
                            }
                        });          

                       /* $('.btn-danger').on('click', function() {

                            let id = $(this).attr('id');
                            $('#id_delete').val(id);
                            $('#modal_delete').modal('show');

                        });*/

                        //Obtener id

                        function mandarId(id){
                            $("#id_delete").val(id);
                        }
        </script>
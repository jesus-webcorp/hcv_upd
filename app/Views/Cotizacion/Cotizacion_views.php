      <script src="../../assets/lib/jquery/jquery.js"></script>

      <link href="../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
      <link href="../../assets/lib/select2/css/select2.min.css" rel="stylesheet">


      <!-- ########## START: MAIN PANEL ########## -->
      <div class="sl-mainpanel">
          <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="index.html">Starlight</a>
              <a class="breadcrumb-item" href="index.html">Tables</a>
              <span class="breadcrumb-item active">Data Table</span>
          </nav>

          <div class="sl-pagebody">
              <div class="sl-page-title">
                  <h5><?php echo $title;?></h5>
                  <p><?php echo $description;?></p>
              </div><!-- sl-page-title -->

              <div class="card pd-20 pd-sm-40">



                  <div class="col-md-3">
                      <button id="btn-insert" class="btn btn-info pd-x-20">Nueva cotizacion</button><br><br>
                  </div>


                  <!-- BASIC MODAL -->
                  <div id="insert_Cotizaciones" class="modal fade">
                      <div class="modal-dialog modal-dialog-vertical-center" role="document">
                          <div class="modal-content bd-0 tx-14">
                              <div class="modal-header pd-y-20 pd-x-25">
                                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Insertar Nueva cotizacion</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <form method="POST" action="<?php echo base_url().'/Cotizaciones/insert_cotizacion'?>">
                                  <div class="modal-body pd-25">
                                      <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                          <h6 class="card-body-title">Nueva cotizacion</h6>
                                          <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                          <div class="row">
                                              <!--   <label class="col-sm-4 form-control-label">Nombre de cotizacion: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                <label>Vendedor</label>
                                                  <select name="id_user_vendor" class="form-control">
                                                    <?php foreach($users as $key):?>
                                                      <option value="<?= $key['id']?>"><?= $key['user_name']?></option>
                                                    <?php endforeach;?>
                                                  </select>
                                              </div>

                                          </div><!-- row -->
                                          <div class="row mg-t-20">
                                              <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                <label>Cliente</label>
                                                  <select name="id_user_client" class="form-control">
                                                    <?php foreach($clients as $key):?>
                                                      <option value="<?= $key['id_user']?>"><?= $key['user_name']?></option>
                                                    <?php endforeach;?>
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="row mg-t-20">
                                              <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                  <input type="text" name="global_percent" class="form-control" placeholder="Porcentaje">

                                              </div>
                                          </div>



                                      </div><!-- card -->
                                  </div>
                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-info pd-x-20">Insertar cotizacion</button>
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
                                  <th class="wd-15p">Vendedor</th>
                                  <th class="wd-15p">Clientes</th>
                                  <th class="wd-15p">Detalles</th>
                                  <th class="wd-15p">Ver pdf</th>
                                  <th class="wd-15p">Acciones</th>
                              </tr>
                          </thead>
                          <tbody>

                              <?php $number=0; foreach($vendor as $key):?>
                              <tr>

                                  <td><?php echo $key['user_name'];?></td>
                                  <td> <?php echo $client[$number]['user_name'];?></td>
                                  <td><a href="<?php echo base_url().'/Cotizacion_products/detalles/'.$key['id'];?>">Productos</a></td>
                                  <td><a href="<?php echo base_url().'/Cotizacion_products/report_view/'.$key['id'];?>">Ver comprobante</a></td>
                                  <td><button id="<?php echo $key['id'];?>" data-toggle="modal" data-target="#modal_update" class="btn btn-primary btn-update pd-x-20">Actualizar</button>
                                      <button id="<?php echo $key['id'];?>" data-toggle="modal" data-target="#modal_delete" class="btn btn btn-danger pd-x-20">Delete</button>
                                      <button class="btn btn-success pd-x-20"   onclick="sale(<?php echo $key['id'];   ?>)">Venta</button></td>
                                    </tr>
                              <?php $number++; endforeach;?>








                          </tbody>
                      </table>
                  </div><!-- table-wrapper -->
              </div><!-- card -->

              <!--Modal delete-->
              <div id="modal_delete" class="modal fade">
                  <div class="modal-dialog modal-sm" role="document">
                      <div class="modal-content bd-0 tx-14">
                          <div class="modal-header pd-x-20">
                              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <form method="POST" action="<?php echo base_url().'/Cotizaciones/delete_cotizaciones'?>">
                              <div class="modal-body pd-20">
                                  <p class="mg-b-5">¿Estas Seguro que quieres eliminar ? </p>
                                  <input type="hidden" name="id_delete" id="id_delete">
                              </div>
                              <div class="modal-footer justify-content-center">
                                  <button type="submit" class="btn btn-info pd-x-20">Eliminar</button>
                                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                              </div>
                          </form>
                      </div>
                  </div><!-- modal-dialog -->
              </div><!-- modal -->

              <div id="modal_update" class="modal fade">
                  <div class="modal-dialog modal-dialog-vertical-center" role="document">
                      <div class="modal-content bd-0 tx-14">
                          <div class="modal-header pd-y-20 pd-x-25">
                              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar cotizacion</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>


                          <form method="POST" action="<?php echo base_url().'/Cotizaciones/update_cotizaciones'?>">
                              <div class="modal-body pd-25">
                                  <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                      <h6 class="card-body-title">Actualizar cotizacion</h6>
                                      <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                      <div class="row">
                                              <!--   <label class="col-sm-4 form-control-label">Nombre de cotizacion: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                <label>Vendedor</label>
                                                  <select name="id_user_vendor_update" id="id_user_vendor_update" class="form-control">
                                                    <?php foreach($users as $key):?>
                                                      <option value="<?= $key['id']?>"><?= $key['user_name']?></option>
                                                    <?php endforeach;?>
                                                  </select>
                                              </div>

                                          </div><!-- row -->
                                          <div class="row mg-t-20">
                                              <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                <label>Cliente</label>
                                                  <select name="id_user_client_update" id="id_user_client_update" class="form-control">
                                                    <?php foreach($users as $key):?>
                                                      <option value="<?= $key['id']?>"><?= $key['user_name']?></option>
                                                    <?php endforeach;?>
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="row mg-t-20">
                                              <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                  <input type="text" name="global_percent_update" id="global_percent_update" class="form-control" placeholder="Porcentaje">
                                                  <input type="hidden" name="id_cotizacion_update" id="id_cotizacion_update">
                                              </div>
                                          </div>

                                  </div><!-- card -->
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-info pd-x-20">Actualizar venta</button>
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
                                  let json = {
                                      id: id_buton
                                  };
                                  $.ajax({
                                      url: '<?php echo base_url().'/Cotizaciones/get_cotizacion_json'?>',
                                      type: "POST",
                                      data: json,
                                      dataType: "JSON",
                                      success: function(success) {
                                        console.log(success);
                                         $('#id_cotizacion_update').val(id_buton);
                                         $('#global_percent_update').val(success.global_percent);
                                         $("#id_user_vendor_update option[value="+ success.id_user_vendor +"]").attr("selected",true);
                                         $("#id_user_client_update option[value="+ success.id_user_client +"]").attr("selected",true);
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

                              $('.btn-danger').on('click', function() {

                                  let id = $(this).attr('id');
                                  $('#id_delete').val(id);
                                  $('#modal_delete').modal('show');

                              });


                    $('#btn-insert').on('click',function(){
                      $('#insert_Cotizaciones').modal('show');
                    });


                    ////////////modulo de sales 

                    function sale(id) {
                        //alert(id);
                        const ruta = "<?= base_url(); ?>/ventas/get_precio";

                        data = {
                            id: id
                        }

                            $.ajax({
                            type: "POST",
                            url: ruta,
                            dataType: "JSON",
                            data: data,
                            success: function(data) {
                               if(data===1){
                                    location.href ="<?= base_url(); ?>/ventas";

                               }else{
                                    location.href ="<?= base_url(); ?>/cotizaciones";
                               }
                               
                            },
                            error: function() {
                                alert("Hubo un erro al obtener los datos");
                            }

                            });   

                    }         

                           

              </script>
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
                  <h5>clientes</h5>
                  <p>Lista de la tabla de clientes</p>
              </div><!-- sl-page-title -->

              <div class="card pd-20 pd-sm-40">
                  


                  <div class="col-md-3">
                      <a href="<?php echo base_url().'/users'?>" class="btn btn-info pd-x-20">Nuevo cliente</a><br><br>
                  </div>


                  <!-- BASIC MODAL -->
                  <div id="modaldemo1" class="modal fade">
                      <div class="modal-dialog modal-dialog-vertical-center" role="document">
                          <div class="modal-content bd-0 tx-14">
                              <div class="modal-header pd-y-20 pd-x-25">
                                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Insertar nuevo pago</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <form method="POST" action="<?php echo base_url().'/Payments/insert_payment'?>">
                                  <div class="modal-body pd-25">
                                      <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                          <h6 class="card-body-title">Nuevo pago</h6>
                                          <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                          <div class="row">
                                              <!--   <label class="col-sm-4 form-control-label">Nombre de pago: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                  <input type="text" class="form-control" name="name" placeholder="Nombre de pago" required>
                                              </div>
                                          </div><!-- row -->

                                          <div class="row mg-t-20">
                                              <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                  <textarea rows="2" class="form-control" name="descripcion" placeholder="Descripción" required></textarea>
                                              </div>
                                          </div>

                                      </div><!-- card -->
                                  </div>
                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-info pd-x-20">Insertar pago</button>
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
                                  <th class="wd-10p">Nombre</th>
                  <th class="wd-15p">RFC</th>
                  <th class="wd-15p">Pais</th>
                  <th class="wd-10p">Municipio</th>
                  <th class="wd-15p">Ciudad</th>
                  <th class="wd-15p">Calle</th>
                  <th class="wd-10p">Acciones</th>
                              </tr>
                          </thead>
                          <tbody>

                              <?php foreach($clients as $key):?>
                <tr>
                  <td><?php echo $key->name;?></td>
                  <td><?php echo $key->rfc;?></td>
                  <td><?php echo $key->adress_country;?></td>
                  <td><?php echo $key->adress_county;?></td>
                  <td><?php echo $key->adress_city;?></td>
                  <td><?php echo $key->adress_street;?></td>
                  <td><button id="<?php echo $key->id;?>" data-toggle="modal" data-target="#modal_update" class="btn btn-primary btn-update pd-x-20">Actualizar</button>

                                      <button id="<?php echo $key->id;?>" data-toggle="modal" data-target="#modal_delete" class="btn btn btn-danger pd-x-20">Delete</button></td>
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
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           <form method="POST" action="<?php echo base_url().'/users/delete_client'?>">
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
                              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar clientes</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>


                          <form method="POST" action="<?php echo base_url().'/users/update_client'?>">
                              <div class="modal-body pd-25">
                                  <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                      <h6 class="card-body-title">Actualizar clientes</h6>
                                      <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                      <div class="row">
                                          <!--   <label class="col-sm-4 form-control-label">Nombre de pago: <span class="tx-danger">*</span></label>-->
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                              <input type="text" class="form-control" name="update_name" id="update_name" placeholder="Nombre de cliente" required>
                                          </div>
                                      </div><!-- row -->
                                      <div class="row mg-t-20">
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                             <input type="text" class="form-control" name="update_rfc" id="update_rfc" placeholder="Correo" required>
                                          </div>
                                      </div>
                                      <div class="row mg-t-20">
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                             <input type="text" class="form-control" name="update_adress_country" id="update_adress_country" placeholder="Pais" required>
                                          </div>
                                      </div>
                                      <div class="row mg-t-20">
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                              <input rows="2" class="form-control" name="update_adress_county" id="update_adress_county" placeholder="Municipio" required>
                                              
                                          </div>
                                      </div>
                                      <div class="row mg-t-20">
                                          <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                              <input rows="2" class="form-control" name="update_adress_city" id="update_adress_city" placeholder="Ciudad" required>
                                              
                                          </div>
                                      </div>
                                      <div class="row mg-t-20">
                                          <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                              <input rows="2" class="form-control" name="update_adress_street" id="update_adress_street" placeholder="Calle" required>
                                              
                                          </div>
                                      </div>
                                      <div class="row mg-t-20">
                                          <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                              <input rows="2" class="form-control" name="update_number" id="update_number" placeholder="Numero" required>
                                          </div>
                                      </div>

                                      <div class="row mg-t-20">
                                          <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                              <input rows="2" class="form-control" name="update_adress_postal_code" id="update_adress_postal_code" placeholder="Codigo Postal" required>
                                              <input type="hidden" name="id" id="update_id">
                                          </div>
                                      </div>

                                  </div><!-- card -->
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-info pd-x-20">Actualizar clientes</button>
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
 
                    $(document).ready(function(){
      $('.btn-update').on('click',function(){
        let id_buton=$(this).attr('id');
        let json={id:id_buton};
          $.ajax({
            url: '<?php echo base_url().'/users/get_data_json'?>',
            type:"POST",
            data:json,
            dataType:"JSON",
            success: function(success) {
                console.log(success);
                $('#update_name').val(success[0].name);
                $('#update_rfc').val(success[0].rfc);
                $('#update_adress_street').val(success[0].adress_street);
                $('#update_adress_country').val(success[0].adress_country);
                $('#update_adress_county').val(success[0].adress_county);
                $('#update_number').val(success[0].adress_number);
                $('#update_adress_postal_code').val(success[0].adress_postal_code);
                $('#update_adress_city').val(success[0].adress_city);
                $('#update_id').val(success[0].id);
          }

          });//AJAX

          $('#update').modal('show');
      });




      $('.btn-delete').on('click',function(){

        let id=$(this).attr('id');
        $('#id_delete').val(id);
        $('#modal_delete').modal('show');

      })

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
                
              </script>
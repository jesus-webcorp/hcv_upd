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

              <div class="card pd-10 pd-sm-20">
              <div class="sl-page-title">
                    <div class="col-md-3">
                      <h5>USUARIOS</h5>
                    </div>
                  <div class="col-md-3">
                      <a href="<?php echo base_url().'/users/new_user'?>" class="btn btn-success pd-x-20">Nuevo usuario</a><br><br>
                  </div>
              </div><!-- sl-page-title -->
                  <!-- BASIC MODAL -->
                  <div id="modaldemo1" class="modal fade">
                      <div class="modal-dialog modal-dialog-vertical-center" role="document">
                          <div class="modal-content bd-0 tx-14">
                              <div class="modal-header pd-y-20 pd-x-25">
                                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Insertar nuevo usuario</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <form method="POST" action="<?php echo base_url().'/Payments/insert_payment'?>">
                                  <div class="modal-body pd-25">
                                      <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                          <h6 class="card-body-title">Nuevo usuario</h6>
                                          <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                          <div class="row">
                                              <!--   <label class="col-sm-4 form-control-label">Nombre de usuario: <span class="tx-danger">*</span></label>-->
                                              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                  <input type="text" class="form-control" name="name" placeholder="Nombre de usuario" required>
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
                                      <button type="submit" class="btn btn-info pd-x-20">Insertar usuario</button>
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
                                  <th class="wd-15p">Grupo</th>
                                  <th class="wd-15p">Correo electronico</th>
                                  <th class="wd-20p">Acerca de mi</th>
                                  <th class="wd-20p">Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach($users as $key):?>
                              <tr>
                                  <td><?php echo $key->user_name;?></td>
                                  <td><?php echo $key->name;?></td>
                                  <td> <?php echo $key->email;?></td>
                                  <td> <?php echo $key->about;?></td>
                                  <td>
                                    <button id="<?php echo $key->id;?>" data-toggle="modal" data-target="#modal_update" class="btn btn-primary btn-update pd-x-20">Actualizar</button>
                                    <button id="<?php echo $key->id;?>" data-toggle="modal" data-target="#modal_delete" class="btn btn btn-danger pd-x-20">Delete</button>
                                  </td>
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
                          <form method="POST" action="<?php echo base_url().'/Users/delete_users'?>">
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
                              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar usuarios</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>


                          <form method="POST" action="<?php echo base_url().'/Users/update_users'?>">
                              <div class="modal-body pd-25">
                                  <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                      <h6 class="card-body-title">Actualizar usuarios</h6>
                                      <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                      <div class="row">
                                          <!--   <label class="col-sm-4 form-control-label">Nombre de usuario: <span class="tx-danger">*</span></label>-->
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                              <input type="text" class="form-control" name="update_name" id="update_name" placeholder="Nombre de usuario" required>
                                          </div>
                                      </div><!-- row -->
                                      <div class="row mg-t-20">
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                             <input type="email" class="form-control" name="email_update" id="email_update" placeholder="Correo" required>
                                          </div>
                                      </div>
                                      <div class="row mg-t-20">
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                             <input type="password" class="form-control" name="password_update" id="password_update" placeholder="Contrasena" required>
                                          </div>
                                      </div>
                                      <div class="row mg-t-20">
                                          <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                          <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                              <textarea rows="2" class="form-control" name="update_about" id="update_about" placeholder="Acerca de mi" required></textarea>
                                              <input type="hidden" name="id_users" id="id_users">
                                          </div>
                                      </div>

                                       <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                                  <select class="form-control" name="id_groups">
                                                    <?php foreach($groups as $key):?>
                                                      <option value="<?php echo $key->id;?>"><?php echo $key->name;?></option>
                                                    <?php endforeach;?>
                                                  </select>
                                              </div>

                                  </div><!-- card -->
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-info pd-x-20">Actualizar usuarios</button>
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
                                  $('#id_payment').val(id_buton);
                                  let json = {
                                      id: id_buton
                                  };
                                  $.ajax({
                                      url: '<?php echo base_url().'/Users/get_users_json'?>',
                                      type: "POST",
                                      data: json,
                                      dataType: "JSON",
                                      success: function(success) {
                                        console.log(success);
                                          $('#update_name').val(success[0].user_name);
                                          $('#update_about').val(success[0].about);
                                          $('#email_update').val(success[0].email);
                                          $('#update_name').val(success[0].user_name);
                                          $('#id_users').val(id_buton);
                                          $('#password_update').val('12345');

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
                
              </script>
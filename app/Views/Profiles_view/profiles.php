      <script src="../../assets/lib/jquery/jquery.js"></script>

      <link href="../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
      <link href="../../assets/lib/select2/css/select2.min.css" rel="stylesheet">


      <!-- ########## START: MAIN PANEL ########## -->
      <div class="sl-mainpanel">
          <div class="sl-pagebody">
              <div class="card pd-20 pd-sm-40">
                  <h6 class="card-body-title">Profiles</h6>
                  <p class="mg-b-20 mg-sm-b-30">Asignación de permisos por usuario, grupo y modulo.</p>
                   
                   <div class="col-md-2">
                        <button class="btn btn-success btn-block mg-b-10">Agregar grupo</button>
                    </div>


                  <div class="table-responsive">
                      <table id="datatable1" class="table display responsive nowrap">
                          <thead>
                              <tr>
                                  <th class="wd-15p">Nombre</th>
                                  <th class="wd-15p">Descripción</th>
                                  <th class="wd-15p">Permisos</th>
                                  <th class="wd-15p">Eliminar</th>
                                  <th class="wd-15p">Actualizar</th>
                                 

                              </tr>
                          </thead>
                          <tbody>

                              <?php foreach($grupos as $grupo):?>
                              <tr>

                                  <td><?php echo $grupo->name;?></td>
                                  <td> <?php echo $grupo->description;?></td>
                                  
                                  <form method="POST" action="<?php echo base_url().'/Profiles/access'?>">
                                  
                                  <td>
                                     
                                     <button type="submit" id="" class="btn btn-primary pd-x-20">Permisos</button>
                                     <input type="hidden" value="<?php echo $grupo->id;?>" name="id_group" id="id_group">
                                                    
                                      
                                      </td>
                                  </form>
                                  
                                   <form method="POST" action="<?php echo base_url().'/Profiles/access'?>">
                                  
                                  <td>
                                   
                                     <button type="submit" id="" class="btn btn-danger pd-x-20">Eliminar</button>
                                     <input type="hidden" value="<?php echo $grupo->id;?>" name="id_group" id="id_group">
                                    
                                      </td>
                                  </form>
                                  
                                   <form method="POST" action="<?php echo base_url().'/Profiles/access'?>">
                                  
                                  <td>
                                     
                        
                                     
                                     <button type="submit" id="" class="btn btn-warning pd-x-20">Actualizar</button>
                                     <input type="hidden" value="<?php echo $grupo->id;?>" name="id_group" id="id_group">
                                     
                                      
                                      </td>
                                  </form>


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
                          <form method="POST" action="<?php echo base_url().'/Payments/delete_payment'?>">
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
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content bd-0 tx-14">
                          <div class="modal-header pd-y-20 pd-x-25">
                              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar permisos</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>


                    <div class="table-responsive">
                      <table id="datatable1" class="table display responsive nowrap">
                          <thead>
                              <tr>
                                  <th class="wd-15p">Nombre</th>
                                  <th class="wd-15p">Descripción</th>
                                  <th class="wd-15p">Permisos</th>
                                 

                              </tr>
                          </thead>
                          <tbody>

                              <?php foreach($grupos as $grupo):?>
                              <tr>

                                  <td><?php echo $grupo->name;?></td>
                                  <td> <?php echo $grupo->description;?></td>
                                  
                                  <td><button id="" data-toggle="modal" data-target="#modal_update" class="btn btn-primary btn-update pd-x-20">Actualizar</button>


                              </tr>
                              <?php endforeach;?>

                          </tbody>
                      </table>
                  </div><!-- table-wrapper -->
              
                      </div>
                  </div><!-- modal-dialog -->
              </div><!-- modal -->





              <script>
 
                    $(document).ready(function() {
                              $('.btn-update').on('click', function() {
                                  let id_buton = $(this).attr('id');
                                  $('#id_payment').val(id_buton);
                                  let json = {
                                      id: id_buton
                                  };
                                  $.ajax({
                                      url: '<?php echo base_url().'/Profiles/get_data_json'?>',
                                      type: "POST",
                                      data: json,
                                      dataType: "JSON",
                                      success: function(success) {
                                          for(i = 0; i <= succes.length; i++)
                                          $('#update_name').text(success[i].name);
                                          
                                      }

                                  }); //AJAX

                                  $('#modal_update').modal('show');
                              });
                      
                    });//Ready function
                  

                
              </script>
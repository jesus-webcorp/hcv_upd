      <script src="../../../assets/lib/jquery/jquery.js"></script>

      <link href="../../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
      <link href="../../../assets/lib/select2/css/select2.min.css" rel="stylesheet">


      <!-- ########## START: MAIN PANEL ########## -->
      <div class="sl-mainpanel">
          <div class="sl-pagebody">
              <div class="card pd-20 pd-sm-40">
                  <h6 class="card-body-title">Modulo de contrato</h6>
                  <p class="mg-b-20 mg-sm-b-30">Listado de contratos creados</p>
                   
                   <div class="col-md-2">
                        <a href="<?php echo base_url().'/contratos'?>">Agregar nuevo contrato</a>
                    </div>


                  <div class="table-responsive">
                      <table id="datatable1" class="table display responsive nowrap">
                          <thead>
                              <tr>
                                  <th class="wd-15p">Nombre</th>
                                  <th class="wd-15p">Descripcion</th>
                                  <th class="wd-15p">Machote de contrato</th>
                                  <th class="wd-15p">Elaboro</th>
                                  <th class="wd-15p">Acciones</th>

                              </tr>
                          </thead>
                          <tbody>

                              <?php foreach($contratos as $key):?>
                              <tr>

                                  <td><?php echo $key['name'];?></td>
                                  <td><?php echo $key["description"];?></td>
                                  <td><a href="<?php echo base_url().'/contratos/report_view/'.$key['id']?>">PDF</a></td>
                                  <td><?php echo $key["user_name"];?></td>
                                  <td><button type="submit" id="<?php echo $key['id'];?>" class="btn btn-primary pd-x-20 btn-delete">Eliminar contrato</button></td>
                  
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
                          <form method="POST" action="<?php echo base_url().'/contratos/delete_contrato'?>">
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


                          </tbody>
                      </table>
                  </div><!-- table-wrapper -->
              
                      </div>
                  </div><!-- modal-dialog -->
              </div><!-- modal -->
            </div>
          </div>



              <script src="../../../assets/lib/datatables/jquery.dataTables.js"></script>
              <script src="../../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
              <script src="../../../assets/lib/select2/js/select2.min.js"></script>

              <script>
 
                    $(document).ready(function() {
                      $('.btn-delete').on('click',function(){
                        let id=$(this).attr('id');
                        $('#id_delete').attr('value',id);
                        $('#modal_delete').modal('show');
                      })
                      
                    });//Ready function
                  

                
              </script>
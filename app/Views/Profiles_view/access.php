 <script src="../../../assets/lib/jquery/jquery.js"></script>

 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
     <div class="sl-pagebody">
         <div class="card pd-20 pd-sm-40">
             <h6 class="card-body-title">Access</h6>
             <p class="mg-b-20 mg-sm-b-30">Asignación de permisos por usuario, grupo y modulo.</p>


             <?php if (isset($success)) {

                    echo "<div class='alert alert-success confirm-div' role='alert' id='desvanecido' >
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                             <strong class=' ' >$success
                          </div>
            
                    ";
                }

                if (isset($error)) {

                    echo "<div class='alert alert-danger confirm-div' role='alert' id='desvanecido'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                             <strong class=' ' >$error
                          </div>
            
                    ";
                }
                ?>

             <div class="table-responsive">
                 <table id="datatable1" class="table display responsive nowrap">
                     <thead>
                         <tr>
                             <th class="wd-15p">MODULOS</th>
                             <th class="wd-15p">Create</th>
                             <th class="wd-15p">Read</th>
                             <th class="wd-15p">Update</th>
                             <th class="wd-15p">Delete</th>
                             <th class="wd-15p">Guardar Cambios</th>


                         </tr>
                     </thead>
                     <tbody>

                         <?php
                            foreach ($modulos as $modulo) {
                                $flag = false;
                                foreach ($access as $acceso) {
                                    if ($acceso->id_module == $modulo->id) {
                                        echo "<tr>";
                                        echo "<td>$modulo->name</td>";
                                        echo "<form method='POST' action='" . base_url() . "/Profiles/update_access'> ";
                                        if ($acceso->create_a) {
                                            echo  "<td><input type='checkbox' name='create' checked='checked' id='create' value='1'></td>";
                                        } else {
                                            echo "<td><input type='checkbox' name='create'  id='create' value='1'></td>";
                                        }
                                        if ($acceso->read_a) {
                                            echo  "  <td><input type='checkbox' checked='checked' name='read' id='read' value='1'></td>";
                                        } else {
                                            echo "<td><input type='checkbox' name='read'  id='cbox3' value='1'></td>";
                                        }
                                        if ($acceso->update_a) {
                                            echo  "  <td><input type='checkbox' name='update' checked='checked' id='update' value='1'></td>";
                                        } else {
                                            echo "<td><input type='checkbox' name='update' id='update' value='1'></td>";
                                        }
                                        if ($acceso->delete_a) {
                                            echo  "  <td><input type='checkbox' name='delete' checked='checked' id='delete' value='1'></td>";
                                        } else {
                                            echo "<td><input type='checkbox' name='delete' id='delete' value='1'></td>";
                                        }
                                        echo "<input type='hidden' value='" . $acceso->id_group . "' name='id_group' id='id_group'>
                                                <input type='hidden' value='" . $modulo->id . "' name='id_module' id='id_module'></td>
                                                <td>
                                                    <button type='submit' id='' class='btn btn-primary pd-x-20'>Actualizar</button>
                                                </form> 
                                                </td>";
                                        echo "</tr>";

                                        $flag = true;
                                    }
                                }

                                if (!$flag) {
                                            echo "
                                              <tr>
                                              <td>$modulo->name</td>
                                            <form method='POST' action='" . base_url() . "/Profiles/insert_access'>
                                              <td><input type='checkbox' name='create' id='create' value='1'></td>
                                              <td><input type='checkbox' name='read'  id='read' value='1'></td>
                                              <td><input type='checkbox' name='update' id='update' value='1'></td>
                                              <td><input type='checkbox' name='delete' id='delete' value='1'></td>";
                                            echo "
                                                    <input type='hidden' value='" . $id_group . "' name='id_group' id='id_group'>
                                                    <input type='hidden' value='" . $modulo->id . "' name='id_module' id='id_module'></td>
                                                    <td>
                                                        <button type='submit' id='' class='btn btn-primary pd-x-20'>Actualizar</button>
                                                    </td>
                                              </form> 
                                              ";
                                            echo "</tr>";
                                }
                            }

                            ?>




                     </tbody>
                 </table>
             </div>

             <!-- table-wrapper -->

             <!--             <div class="table-responsive">
                      <table id="datatable1" class="table display responsive nowrap">
                          <thead>
                              <tr>
                            
                                  <th class="wd-15p">ID MODULE</th>
                                  <th class="wd-15p">Name</th>
                                  <th class="wd-15p">Description</th>
                               
                                 

                              </tr>
                          </thead>
                          <tbody>

                              <?php foreach ($modulos as $modulo) : ?>
                              <tr>
                        
                                   <td> <?php echo $modulo->id; ?></td>
                                  <td> <?php echo $modulo->name; ?></td>
                                  <td> <?php echo $modulo->description; ?></td>
                           
                            

                              </tr>
                              <?php endforeach; ?>




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
                     <form method="POST" action="<?php echo base_url() . '/Payments/delete_payment' ?>">
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





         <script>
             if (document.addEventListener) {
                 let selector = document.querySelector('#desvanecido');
                 setTimeout(function() {
                     selector.style.display = 'none';
                 }, 3000);
             }
         </script>
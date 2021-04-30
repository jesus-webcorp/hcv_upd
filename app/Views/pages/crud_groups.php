<script src="../../assets/lib/jquery/jquery.js"></script>
<!--Ulises dijo en la conferiencia en la que no estuviste que este lo subieramos arriba de la vista
para que nos jalara el jquery-->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Basic Tables</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>CRUD GRUPOS</h5>
          <p class="mg-b-20 mg-sm-b-30"><a href="" class="btn btn-info pd-x-20" data-toggle="modal" data-target="#modaldemo1">Nuevo Grupo</a></p>
          
        </div><!-- sl-page-title -->

        <!-- BASIC MODAL -->
    <div id="modaldemo1" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">CREAR NUEVO GRUPO</h6>
            <!--  ese esta aqui -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body pd-25">
            
               <div>    
                      <form method="POST" action="<?php echo base_url();?>/examples/addNewGroup" enctype="multipart/form-data">
                        <div>
                          <label>Nombre:</label>
                          <input type="text" class="form-control" name="groupName">
                        </div>
                        <div>
                          <label>Descripción:</label>
                          <textarea type="text" class="form-control" name="description"></textarea>
                        </div>
                        <div>
                          <label>Activo:</label>
                          <input type="" class="form-control" name="status">
                        </div>
                        <br>
                        <div>
                          <label>Fecha:</label>
                          <input type="date" name="date">
                        </div>
                        <div class="modal-footer">
            <button type="submit"  class="btn btn-info pd-x-20">Enviar</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
          </div>

                      </form>
              </div>
             
          </div>

          
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <div class="table-responsive">
            <table class="table mg-b-0">
              
              <thead>
                <tr>
                  <th>
                    <label class="ckbox mg-b-0">
                      <input type="checkbox"><span></span>
                    </label>
                  </th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Activo</th>
                  <th>Fecha de Creacion</th>
                  <th>Actualizar</th>
                  <th>Borrar</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                foreach($grupos as $key): ?>
                  

                  <tr>
                    <td>
                      <label class="ckbox mg-b-0">
                        <input type="checkbox"><span></span>
                      </label>
                    </td>




                    <td><?php echo $key['name']; ?></td>
                    <td><?php echo $key['description']; ?></td>
                    <td><?php echo $key['active']; ?></td>
                    <td><?php echo $key['c_date']; ?></td>

                    <td><button class="btn btn-info pd-x-20" onclick="mandarId(<?php echo $key['id'];?>)" data-toggle="modal" data-target="#modaldemo2">Editar</button></td>

                    <td><button class="btn btn-danger pd-x-20" onclick="deleteId(<?php echo $key['id'];?>)" data-toggle="modal" data-target="#modaldemo3">Eliminar</button></td>


                  <!--<td><a href="" class="btn btn-danger pd-x-20" data-toggle="modal" data-target="#modaldemo3">Eliminar</a></td>-->
                </tr> 
              <?php endforeach; ?>
              
              </tbody>



                  
                



            </table>
          </div><!-- table-responsive -->
        </div><!-- card -->


            <!-- BASIC MODAL actualiza -->
    <div id="modaldemo2" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">EDITAR GRUPO</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            
               <div>
                      <form  action="<?php echo base_url(); ?>/examples/Adatos" method="POST" enctype="multipart/form-data">
                        <div>
                      <input name="id" id="idgrupo">
                    </div>


                        <div>
                          <label>Nombre:</label>
                          <input  type="text" id="name" name="groupName" class="form-control">
                        </div>
                        <div>
                          <label>Descripción:</label>
                          <textarea type="text" id="description" name="description" class="form-control"></textarea>
                    
                        </div>
                        <div>
                          <label>Activo</label>
                          <input type="" id="active"  name="status" class="form-control">
                        </div>
                        <br>
                        <div>
                          <label>Fecha:</label>
                          <input type="date" id="date"  name="date">
                        </div>


                          <div class="modal-footer">
            <button type="submit"  class="btn btn-info pd-x-20">Guardar</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
          </div>

                      </form>
                      <!--mira aqui parece que falta meter el boton de enviar al formulario -->
                    </div>
             </p>
          </div>

          
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

     <!-- BASIC MODAL DELETE-->
    <div id="modaldemo3" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">ELIMINAR GRUPO</h6>
            <!--  ese esta aqui -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body pd-25">
               <div>    
                  <form method="POST" action="<?php echo base_url();?>/examples/delete">
                    <div>
                      <h4>¿Está seguro de eliminar este grupo?</h4>
                    </div>
                    <div>
                      <input type="hidden"  type="text" name="id" id="idgro">
                    </div>
                        
                    <div class="modal-footer">
                      <button type="submit"  class="btn btn-info pd-x-20">Si</button>
                      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">No</button>
                    </div>
                  </form>
              </div>
          </div>

        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->




<script>
function myFunction() {
  alert("I am an alert box!");
}
</script>

  <!--AJAX-->
  <script type="text/javascript">

    function mandarId(id){
       //$("#name").val(response.name);

       //alert(id);
       const ruta = "<?=base_url();?>/examples/Actualizar";

       data = {
            id: id
            }

    $.ajax({
      type : "POST",
      url: ruta,
      dataType: "JSON",
      data: data,
      success : function(response){
         console.log(response);

        $("#idgrupo").val(response.id);
        $("#name").val(response.name);
        $("#description").val(response.description);
        $("#active").val(response.active);
        $("#date").val(response.c_date);
        //console.log(response);
      },

    });


    }

    function deleteId(id){
      $("#idgro").val(id);

    }
   
   

    
</script>

       
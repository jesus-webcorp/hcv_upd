<script src="../../assets/lib/jquery/jquery.js"></script>


<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Modules</a>
  </nav>

  <div class="sl-pagebody">
      <div class="card pd-10 pd-sm-20">
      <div class="sl-page-title">
        <div class="col-md-3">
          <h5>MODULOS</h5>
        </div>
        <div class="col-md-3">
          <p><button class="btn btn-success" id="btn-insert">Nuevo Modulo</button></p>
        </div>
      </div><!-- sl-page-title -->
        <div class="table-responsive">
          <table class="table display responsive nowrap">
            <thead>
              <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Controller</th>
                <th>Phase</th>
                <th>Active</th>
                <th>Mostrar</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($modules as $key) : ?>
                <tr>
                  <td><?php echo $key->id; ?></td>
                  <td><?php echo $key->name; ?></td>
                  <td><?php echo $key->description; ?></td>
                  <td><?php echo $key->controller; ?></td>
                  <td><?php echo $key->phase; ?></td>
                  <td><?php echo $key->active; ?></td>
                  <td><?php echo $key->show_in_menu; ?></td>
                  <td>
                    <button class="btn-update btn btn-info" id="<?php echo $key->id; ?>">Actualizar</button>
                    <button class="btn-delete btn btn-danger" id="<?php echo $key->id; ?>">Eliminar</button>
                  </td>

                </tr>
              <?php endforeach; ?>


            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->

      <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
      <pre><code class="javascript pd-20"></code></pre>

      <!--MODAL INSERTAR-->
      <div id="insertar" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Insertar datos</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="<?php echo base_url() . '/Modules/insert_module' ?>">
              <div class="modal-body pd-25">
                <div class="row container">
                  <label>Nombre del modulo: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Nombre del Modulo:" required>
                </div>
                <div class="row container">
                  <label>Descripcion:<span class="tx-danger">*</span></label>
                  <textarea rows="2" class="form-control" name="description" placeholder="Descripcion del Modulo:" required></textarea>
                </div>

                <div class="row container">
                  <label>Controlador<span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="controller" placeholder="Controlador:" required>
                </div>

                <div class="row container">
                  <span class="select2 select2-container select2-container--default select2-container--focus select2-container--above" dir="ltr" style="width: 448px;">
                    <span class="selection">
                      <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-bwi2-container">
                        <span class="select2-selection__rendered" id="select2-bwi2-container"><span class="select2-selection__placeholder">CATEGORIA: <span class="tx-danger">*</span> </span></span><span class="select2-selection__arrow" role="presentation">
                          <b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  <select name="id_group" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true" required>
                    <option value="">Selecciona Categoria</option>
                    <?php foreach ($group as $key) : ?>
                      <option value="<?= $key->id ?>"><?= $key->name ?></option>
                    <?php endforeach; ?>
                  </select>
                 
                </div>
                <br>

                <div class="col-lg-5">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Visible en el menu: <span class="tx-danger">*</span></label>
                    <select name="visible" class="form-control select2" data-placeholder="Selecciona" required>
                        <option value="">Selecciona</option>
                        <option value="1">Visible</option>
                        <option value="0">No Visible</option>
                    </select>
                  </div>
              </div><!-- col-4 -->


              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Guardar modulo.</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
              </div>

            </form>
          </div>
        </div><!-- modal-dialog -->
      </div><!-- modal -->

      <!--MODAL update-->
      <div id="update" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar datos.</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="<?php echo base_url() . '/Modules/update_module' ?>">
              <div class="modal-body pd-25">
                <label>Nombre del modulo</label>
                <input type="text" class="form-control" name="name" id="name_update" placeholder="Nombre del Modulo:">
                <label>Descripcion del modulo</label>
                <textarea rows="2" class="form-control" name="description" id="description_update" placeholder="Descripcion del Modulo:"></textarea>

                <div class="col-lg-8">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Visible en el menu: <span class="tx-danger">*</span></label>
                    <select id="category"   name="category" class="form-control select2" data-placeholder="Selecciona" required >
                       
                    </select>
                  </div>
                </div><!-- col-4 -->

              
                <div class="col-lg-8">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Visible en el menu: <span class="tx-danger">*</span></label>
                    <select id="mySelect"   name="visible" class="form-control select2" data-placeholder="Selecciona" required >
                       
                    </select>
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-8">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Activo: <span class="tx-danger">*</span></label>
                    <select id="activo"   name="activo" class="form-control select2" data-placeholder="Selecciona" required >
                       
                    </select>
                  </div>
                </div><!-- col-4 -->


                <input type="hidden" name="id_update" id="id_update">
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info pd-x-20">Guardar modulo.</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->



    <!--Modal delete-->
    <div id="modal_delete" class="modal fade">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Eliminar modulo.</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="<?php echo base_url() . '/Modules/delete_module' ?>">
            <div class="modal-body pd-20">
              <p class="mg-b-5">¿Estas Seguro que quieres eliminar ? </p>
              <input type="hidden" name="id_delete" id="id_delete">
            </div>
            <div class="modal-footer justify-content-center">
              <button type="submit" class="btn btn-info pd-x-20">Eliminar</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
            </div>
          </form>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script type="text/javascript">
      $(document).ready(function() {
        $('.btn-update').on('click', function() {
          let id_buton = $(this).attr('id');
          let json = {
            id: id_buton
          };
          $.ajax({
            url: '<?php echo base_url() . '/Modules/get_data_json' ?>',
            type: "POST",
            data: json,
            dataType: "JSON",
            success: function(success) {
              console.log(success);
              $('#name_update').val(success[0].name);
              $('#description_update').val(success[0].description);
              $('#id_update').val(id_buton);

              let valor = success[0].show_in_menu;
              var opnombre;
              let activo = success[0].active;
              
              if(valor ==="1"){
                var opnombre = "Visible";

                $('#mySelect option').remove(); 
                  $('#mySelect').append($('<option>', {
                    value: success[0].show_in_menu,
                    text: opnombre
                  }));

                  $('#mySelect').append($('<option>', {
                    value: 0,
                    text: "No Visible"
                  }));


              }else{

                var opnombre = "No Visible";
                $('#mySelect option').remove(); 
                  $('#mySelect').append($('<option>', {
                    value: success[0].show_in_menu,
                    text: opnombre
                  }));

                  $('#mySelect').append($('<option>', {
                    value: 1,
                    text: "Visible"
                  }));

              }

              ////////// select activo//////

              if(activo ==="1"){
                var selectname = "Activo";

                $('#activo option').remove(); 
                  $('#activo').append($('<option>', {
                    value: activo,
                    text: selectname
                  }));

                  $('#activo').append($('<option>', {
                    value: 0,
                    text: "No Activo"
                  }));


              }else{

                var selectname = "No Activo";
                $('#activo option').remove(); 
                  $('#activo').append($('<option>', {
                    value: activo,
                    text: selectname
                  }));

                  $('#activo').append($('<option>', {
                    value: 1,
                    text: "Activo"
                  }));

              }

              //actualizar category

              let category = success[0].idgroup;
              alert(category);

              switch (category) {
                case "1":
                    $('#category option').remove(); 
                    $('#category').append($('<option>', {
                    value: category,
                    text: "ADMIN"
                  }));

                  $('#category').append($('<option>', {
                    value:2 ,
                    text: "VENTAS"
                  }));

                  $('#category').append($('<option>', {
                    value: 3,
                    text: "CLIENTE"
                  }));

                  $('#category').append($('<option>', {
                    value: 4,
                    text: "LEGAL"
                  }));

                  break;

                  case "2":
                    $('#category option').remove(); 
                    $('#category').append($('<option>', {
                    value: category,
                    text: "VENTAS"
                  }));

                  $('#category').append($('<option>', {
                    value:1 ,
                    text: "ADMIN"
                  }));

                  $('#category').append($('<option>', {
                    value: 3,
                    text: "CLIENTE"
                  }));

                  $('#category').append($('<option>', {
                    value: 4,
                    text: "LEGAL"
                  }));
                  break;

                  case "3":
                    $('#category option').remove(); 
                    $('#category').append($('<option>', {
                    value: category,
                    text: "CLIENTE"
                  }));

                  $('#category').append($('<option>', {
                    value:2 ,
                    text: "VENTAS"
                  }));

                  $('#category').append($('<option>', {
                    value: 1,
                    text: "ADMIN"
                  }));

                  $('#category').append($('<option>', {
                    value: 4,
                    text: "LEGAL"
                  }));

                  break;

                  case "4":
                    $('#category option').remove(); 
                    $('#category').append($('<option>', {
                    value: category,
                    text: "LEGAL"
                  }));

                  $('#category').append($('<option>', {
                    value:2 ,
                    text: "VENTAS"
                  }));

                  $('#category').append($('<option>', {
                    value: 3,
                    text: "CLIENTE"
                  }));

                  $('#category').append($('<option>', {
                    value: 1,
                    text: "ADMIN"
                  }));

                  break;


              }

            }

          }); //AJAX

          $('#update').modal('show');
        });

        // muestra el modal de agregar

        $('#btn-insert').on('click', function() {

          $('#insertar').modal('show');
        })

        //funcion para eliminar dato de la tabla 

        $('.btn-delete').on('click', function() {
          $('#modal_delete').modal('show');
          let id = $(this).attr('id');
          $('#id_delete').val(id);
        })


      }); //Ready function
    </script>
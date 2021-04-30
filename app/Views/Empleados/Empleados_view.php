<link href="../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="../../assets/lib/select2/css/select2.min.css" rel="stylesheet">
<script src="../../assets/lib/jquery/jquery.js"></script>




<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Tabla Empleados</span>
  </nav>



  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Empleados</h5>
     
      <!--<p>DataTables is a plug-in for the jQuery Javascript library.</p>-->
    </div><!-- sl-page-title -->

    <div>
      <!--<button class="btn btn-success" onclick="location.href='<?php echo base_url(); ?>/proveedores/agregar'">+ NUEVO PROVEEDOR</button>-->
      <button class="btn btn-success" data-toggle="modal" data-target="#modaldemo3">Nuevo Empleado</button>
    </div>
    </br>
    </br>

    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Tabla Empleados</h6>
      <!--<p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will</p>-->
     

      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Nombre</th>
              <th class="wd-15p">Perfil</th>
              <th class="wd-20p">Salario</th>
              <th class="wd-15p">Descripcion </th>
              <th class="wd-15p">Acciones </th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($get_datos as $empleado) {
                echo ('<tr>');
                  echo ('<td>' . $empleado->user_name . '</td>');
                  echo ('<td>' . $empleado->name . '</td>');
                  echo ('<td>' . '$'.$empleado->salary . '</td>');
                  echo ('<td>' . $empleado->job_description . '</td>');
                  echo ('<td>' . '<button class="btn btn-primary" data-toggle="modal" data-target="#modaldemoac" onclick="mandarId('.$empleado->id.')" id="actualizar">' . 'Editar' . '</button>' . '</td>');
                  echo ('<td>' . '<button class="btn btn-danger" data-toggle="modal" data-target="#modaldemo2" onclick="deleteId('.$empleado->id.')">' . 'Eliminar' . '</button>' . '</td>');
                echo ('</tr>');
              }

            ?>
            
          </tbody>
        </table>
      </div><!-- table-wrapper -->
    </div><!-- card -->

  </div><!-- sl-pagebody -->
  <footer class="sl-footer">
    <div class="footer-left">
      <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
      <div>Made by ThemePixels.</div>
    </div>
    <div class="footer-right d-flex align-items-center">
      <span class="tx-uppercase mg-r-10">Share:</span>
      <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
      <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
    </div>
  </footer>
</div><!-- sl-mainpanel -->


<!-- Modal crear empleado -->

<div id="modaldemo3" class="modal fade">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Agregar Datos Empleado</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Datos del Empleado</h6>
          <p class="mg-b-20 mg-sm-b-30">Rellena todos los campos</p>

          <form id="Nprovedor" method="POST" action="<?php echo base_url() ?>/empleados/agregar">
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Selecciona Empleado: <span class="tx-danger">*</span></label>
                    <select id ="empleado" name="user" class="form-control select2" data-placeholder="Choose country" required>
                    <option value="" name="user">Selecciona Empleado</option>
                    <?php
                    foreach ($select_empleados as $key) {
                     echo ('<option  value="' . $key->id . '" name="user">' . $key->user_name . '</option>');
                    }
                    ?>
                  </select>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Perfil<span class="tx-danger">*</span></label>
                    <input id="rol"  class="form-control" type="text" name="perfil" placeholder="Admin" required  disabled>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Salario<span class="tx-danger">*</span></label>
                    <input class="form-control" type="number" name="salario" placeholder="$ 0.0" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-8">
                  <div class="form-group">
                    <label class="form-control-label">Descripcion: <span class="tx-danger">*</span></label>
                    <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion" required></textarea>
                  </div>
                </div><!-- col-4 -->              
               
              </div><!-- row -->
          </form>

        </div><!-- form-layout -->
      </div>
    </div><!-- modal-body -->
    <div class="modal-footer">
      <button type="submit" id="enviarform" form="Nprovedor" class="btn btn-info pd-x-20">Guardar</button>
      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div><!-- modal-dialog -->
</div>


<!--Eliminar empleado-->
<div id="modaldemo2" class="modal fade">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Eliminar Empleado</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <p class="mg-b-5">Realmente desea eliminar?</p>
        <form id="DeleteForm" method="POST" action="<?php echo base_url() ?>/empleados/delete">
          <input class="form-control" id="emp" name="id_emp" type="hidden" >
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button form="DeleteForm" type="submit" class="btn btn-danger">Eliminar</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->

<!--Actualizar empleado-->
<div id="modaldemoac" class="modal fade">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar Empleado</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Datos de Empleado</h6>
          <p class="mg-b-20 mg-sm-b-30">Remplaza los datos a Actualizar.</p>

           <form id="Aemploye" method="POST" action="<?php echo base_url() ?>/empleados/update">
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nombre del Empleado: <span class="tx-danger">*</span></label>
                    <input id="nombre"  class="form-control rol" type="text" name="perfil" placeholder="Nombre" required  disabled>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Perfil<span class="tx-danger">*</span></label>
                    <input id="perfil"  class="form-control rol" type="text" name="perfil" placeholder="Admin" required  disabled>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Salario<span class="tx-danger">*</span></label>
                    <input id ="salario" class="form-control" type="number" name="salario" placeholder="$ 0.0" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-8">
                  <div class="form-group">
                    <label class="form-control-label">Descripcion: <span class="tx-danger">*</span></label>
                    <textarea id="descripcion" name="descripcion" rows="2" class="form-control" placeholder="Descripcion" required></textarea>
                  </div>
                </div><!-- col-4 -->   
                <div class="col-lg-2">
                  <div class="form-group">
                    <input id="id_empleado" class="form-control"  name="id" type="hidden">
                  </div>
                </div><!-- col-4 -->           
               
              </div><!-- row -->
          </form>

        </div><!-- form-layout -->
      </div>
    </div><!-- modal-body -->
    <div class="modal-footer">
      <button type="submit" form="Aemploye" class="btn btn-info pd-x-20">Guardar</button>
      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div><!-- modal-dialog -->
</div>



<script>

$(document).ready(function(){
	$("select[name=user]").change(function(){
    let id  = $('select[name=user]').val();

    const ruta = "<?= base_url(); ?>/empleados/get_group";

    data = {
      id: id
    }

    $.ajax({
      type: "POST",
      url: ruta,
      dataType: "JSON",
      data: data,
      success: function(data) {
        console.log(data);
        $('#rol').val(data[0].name);
      
      },
      error: function() {
        alert("Hubo un erro al obtener los datos");
      }

    })

   
  });

});

///Eliminar empleado
function deleteId(idemp) {
    $("#emp").val(idemp);
  }

  //Actualizar empleado 
  function mandarId(id) {
    const ruta = "<?= base_url(); ?>/empleados/get_actualizar";
    data = {
      id: id

    }

    $.ajax({
      type: "POST",
      url: ruta,
      dataType: "JSON",
      data: data,
      success: function(response) {

        $("#nombre").val(response[0].user_name);
        $("#perfil").val(response[0].name);
        $("#salario").val(response[0].salary);
        $("#descripcion").val(response[0].job_description	);
        $("#id_empleado").val(response[0].id);
       
      },

    });


  }

  $('#datatable1').DataTable({
    responsive: true,

    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_ items/page',
    }
  });

 



</script>
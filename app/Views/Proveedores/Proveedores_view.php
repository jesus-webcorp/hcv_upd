<link href="../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="../../assets/lib/select2/css/select2.min.css" rel="stylesheet">
<script src="../../assets/lib/jquery/jquery.js"></script>


<div class="sl-mainpanel prueba " style="width:100%;  overflow: scroll;">
  <nav class="breadcrumb sl-breadcrumb">
    
    <span class="breadcrumb-item active">Tabla Proveedores</span>
  </nav>



  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5 class="prueba">PROVEEDORES</h5>
      <!--<p>DataTables is a plug-in for the jQuery Javascript library.</p>-->
    </div><!-- sl-page-title -->

    <div>
      <!--<button class="btn btn-success" onclick="location.href='<?php echo base_url(); ?>/proveedores/agregar'">+ NUEVO PROVEEDOR</button>-->
      <button class="btn btn-success" data-toggle="modal" data-target="#modaldemo3">Nuevo Proveedor</button>
    </div>
    </br>
    </br>




    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Tabla Proveedores</h6>
      <!--<p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will</p>-->

      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Nombre</th>
              <th class="wd-15p">Pais</th>
              <th class="wd-20p">Ciudad</th>
              <th class="wd-15p">Municipio</th>
              <th class="wd-10p">Codigo Postal</th>
              <th class="wd-15p">N calle</th>
              <th class="wd-15p">RFC</th>
              <th class="wd-15p">Producto</th>
              <th class="wd-10p">Editar</th>
              <th class="wd-10p">Borrar</th>

            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($get_provedor as $pro) {
              //print_r($pro);

              echo ('<tr>');
              echo ('<td>' . $pro->name_proveedor . '</td>');
              echo ('<td>' . $pro->p_address_country . '</td>');
              echo ('<td>' . $pro->p_address_city . '</td>');
              echo ('<td>' . $pro->p_address_county . '</td>');
              echo ('<td>' . $pro->p_address_postal_code . '</td>');
              echo ('<td>' . $pro->p_address_number . '</td>');
              echo ('<td>' . $pro->rfc . '</td>');
              echo ('<td>' . '<button class="btn btn-warning" data-toggle="modal" data-target="#modalproductos" onclick="getProductos(' . $pro->id_proveedor . ')">' . 'Productos' . '</button>' . '</td>');
              echo ('<td>' . '<button class="btn btn-primary" data-toggle="modal" data-target="#modaldemoac" onclick="mandarId(' . $pro->id_proveedor . ')" id="actualizar">' . 'Editar' . '</button>' . '</td>');
              echo ('<td>' . '<button class="btn btn-danger" data-toggle="modal" data-target="#modaldemo2" onclick="deleteId(' . $pro->id_proveedor . ')">' . 'Eliminar' . '</button>' . '</td>');
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


<!-- Agregar Proveedor -->
<div id="modaldemo3" class="modal fade">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Agregar Nuevo Proveedor</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Datos del Proveedor</h6>
          <p class="mg-b-20 mg-sm-b-30">Rellena todos los campos</p>

          <form id="Nprovedor" method="POST" action="<?php echo base_url() ?>/Proveedores/agregar">
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Pais <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="pais" placeholder="Pais" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Cuidad: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="ciudad" placeholder="Ciudad" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Municipio: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="municipio" placeholder="Municipio" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Calle: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="calle" placeholder="Calle" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Codigo Postal: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="cp" placeholder="C.P." required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Numero: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="numero" placeholder="Numero" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">RFC: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="rfc" placeholder="RFC" required>
                  </div>
                </div><!-- col-4 -->

                <!--<div class="col-lg-12">
                          <div class="form-group mg-b-10-force">

                            <label class="form-control-label">PRODUCTOS: <span class="tx-danger">*</span></label></br>

                            <?php
                            /*foreach($get_productos as $key){
                                  echo '<input type="checkbox" name="productos[]" value="'.$key->id.'">'.$key->name.'</br>';
                                }*/
                            ?>
                          </div>
                        </div>-->
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
</div><!-- modal -->

<!--Modal de Actualizacion proveedor -->

<div id="modaldemoac" class="modal fade">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar Proveedor</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Datos del Proveedor</h6>
          <p class="mg-b-20 mg-sm-b-30">Remplaza los datos a Actualizar.</p>

          <form id="CreateForm" method="POST" action="<?php echo base_url() ?>/proveedores/adatos">
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                    <input class="form-control" id="npro" type="text" name="nombre" placeholder="Nombre">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Pais <span class="tx-danger">*</span></label>
                    <input class="form-control" id="pais" type="text" name="pais" placeholder="Pais">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Cuidad: <span class="tx-danger">*</span></label>
                    <input class="form-control" id="cuidad" type="text" name="ciudad" placeholder="Ciudad">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Municipio: <span class="tx-danger">*</span></label>
                    <input class="form-control" id="municipio" type="text" name="municipio" placeholder="Municipio">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Calle: <span class="tx-danger">*</span></label>
                    <input class="form-control" id="calle" type="text" name="calle" placeholder="Calle">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Codigo Postal: <span class="tx-danger">*</span></label>
                    <input class="form-control" id="cp" type="text" name="cp" placeholder="C.P.">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Numero: <span class="tx-danger">*</span></label>
                    <input class="form-control" id="numero" type="text" name="numero" placeholder="Numero">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">RFC: <span class="tx-danger">*</span></label>
                    <input class="form-control" id="rfc" type="text" name="rfc" placeholder="RFC">
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" placeholder="RFC">
                  </div>
                </div><!-- col-4 -->
              </div><!-- row -->

          </form>

        </div><!-- form-layout -->
      </div>
    </div><!-- modal-body -->
    <div class="modal-footer">
      <button type="submit" form="CreateForm" class="btn btn-info pd-x-20">Guardar</button>
      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div><!-- modal-dialog -->
</div>

<!--Eliminar proveedor-->
<div id="modaldemo2" class="modal fade">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Eliminar Proveedor</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <p class="mg-b-5">Realmente desea eliminar?</p>
        <form id="DeleteForm" method="POST" action="<?php echo base_url() ?>/proveedores/delete">
          <input class="form-control" id="id_prove" name="id_prove" type="hidden">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button form="DeleteForm" type="submit" class="btn btn-danger">Eliminar</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- Modal Productos -->
<div id="modalproductos" class="modal fade">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">PRODUCTOS</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <form id="obtenerid" method="POST">
          <input type="hidden" id="idproverdorx">
        </form>
        <button class="btn btn-success" form="#obtenerid" id="getId" data-toggle="modal" data-target="#modalCreateProduct">Asignar Productos</button>
        <br>
        <br>
        <div class="card pd-0 pd-sm-0">
          <h6 class="card-body-title">Tabla de productos</h6>
          <!--<p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>-->

          <div class="table-wrapper">
            <table id="datatable3" class="table table-bordered table-primary">
              <thead class="bg-info">
                <tr>
                  <th class="wd-10p">Nombre</th>
                  <th class="wd-15p">Descripción</th>
                  <th class="wd-15p">Imagen</th>
                  <th class="wd-15p">Precio</th>
                  <th class="wd-15p">Editar</th>
                  <th class="wd-10p">Eliminar</th>
                </tr>
              </thead>
              <tbody id="dataproductos">
                <!-- aqui van los datos de la tabla de productos -->

              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- modal-body -->
      <!--<div class="modal-footer">
                <button type="button" class="btn btn-info pd-x-20">Save changes</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>-->
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- Modal Guardar Productos -->

<div id="modalCreateProduct" class="modal fade">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">

        <form id="Productosform" method="POST" action="<?php echo base_url() ?>/proveedores/asignar_product">
          <div class="inputs">
            <div class="row mg-b-25">
              <div class="col-lg-5">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select name="productos[]" class="form-control select2" data-placeholder="Choose country">
                    <?php
                    foreach ($obtener_productos as $key) {
                      echo ('<option  value="' . $key->id . '" name="producto">' . $key->name . '</option>');
                    }
                    ?>
                  </select>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Precio: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="precio[]" placeholder="Precio" required>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2 pd-t-25">
                <div class="form-group">
                  <button class="btn btn-info" type="button" onclick="nuevo();">Agregar Producto</button>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
          </div>
          <input  type="hidden" name="enviar">
          <input id="idform" name="idform" class="form-control" type="hidden">
        </form>

      </div><!-- modal-body -->
      <div class="modal-footer">
        <button  form="Productosform" type="submit" class="btn btn-info pd-x-20">Guardar Productos</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->


<!-- Modal Actualizar Producto -->

<div id="modalacproducto" class="modal fade">
  <div class="modal-dialog modal-dialog-vertical-center" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar producto</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?php echo base_url() ?>/proveedores/productos_update" enctype="multipart/form-data">
        <div class="modal-body pd-25">
          <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
            <h6 class="card-body-title">Producto</h6>
            <p class="mg-b-20 mg-sm-b-30">Remplaza los datos a Actualizar.</p>
            <div class="row mg-t-20">
              <label class="col-sm-12 form-control-label">Precio: <span class="tx-danger">*</span></label>
              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                <input id="precio" type="text" class="form-control" name="precio" placeholder="Precio sugerido" required>
              </div>
            </div><!-- row -->
            <div class="col-lg-4">
              <div class="form-group">
                <input class="form-control" id="acid" name="acid" type="hidden">
              </div>
            </div><!-- col-4 -->
            
          </div><!-- card -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20">Actualizar producto</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
        </div>
      </form>

    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->




<!--Modal de eliminar poducto -->

<div id="delproducto" class="modal fade">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Eliminar Producto</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <p class="mg-b-5">Realmente desea eliminar?</p>
        <form id="DeleteProduct" method="POST" action="<?php echo base_url() ?>/proveedores/delete_producto">
          <input class="form-control" id="id_product" name="id_product" type="hidden">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button form="DeleteProduct" type="submit" class="btn btn-danger">Eliminar</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->



<script src="../../assets/lib/datatables/jquery.dataTables.js"></script>
<script src="../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="../../assets/lib/select2/js/select2.min.js"></script>





<script>
  //clonar formulario
  let nuevo = function() {
    $("<section/>").insertBefore("[name='enviar']")
      .append($(".inputs").html())
      .find("button")
      .attr("onclick", "eliminar(this)")
      .text("Eliminar");
  }

  let eliminar = function(obj) {
    $(obj).closest("section").remove();
  }



  //Actualizar Proveedor//
  function mandarId(idpro) {
    const ruta = "<?= base_url(); ?>/proveedores/actualizar";
    data = {
      id_proveedor: idpro

    }

    $.ajax({
      type: "POST",
      url: ruta,
      dataType: "JSON",
      data: data,
      success: function(response) {

        $("#npro").val(response[0].name_proveedor);
        $("#pais").val(response[0].p_address_country);
        $("#cuidad").val(response[0].p_address_city);
        $("#municipio").val(response[0].p_address_county);
        $("#calle").val(response[0].p_address_street);
        $("#cp").val(response[0].p_address_postal_code);
        $("#numero").val(response[0].p_address_number);
        $("#rfc").val(response[0].rfc);
        $("#id").val(response[0].id_proveedor);


      },

    });


  }

  function deleteId(idprove) {
    $("#id_prove").val(idprove);
  }


  //Obtener productos
  function getProductos(id_provedor) {
    
    $("#idproverdorx").val(id_provedor);

    const ruta = "<?= base_url(); ?>/proveedores/get_products";

    data = {
      id: id_provedor
    }

    $.ajax({
      type: "POST",
      url: ruta,
      dataType: "JSON",
      data: data,
      success: function(data) {
        let html = '';
        let i;

        for (i = 0; i < data.length; i++) {
          html += '<tr>' +
            '<td>' + data[i].name + '</td>' +
            '<td>' + data[i].description + '</td>' +
            '<td>' + '<img src="../../public/images/' + data[i].media_path + '" class="img-thumbnail"/>' + '</td>' +
            '<td>' + '$' + data[i].supplier_price + '</td>' +
            '<td>' + '<button class="btn btn-primary" data-toggle="modal" data-target="#modalacproducto" onclick="productoId(' + data[i].id + ')">' + 'Editar' + '</button>' + '</td>' +
            '<td>' + '<button class="btn btn-danger" data-toggle="modal" data-target="#delproducto" onclick="productoDelete(' + data[i].id + ')">' + 'Eliminar' + '</button>' + '</td>' +

            '</tr>';
        }

        $('#dataproductos').html(html);
      
      },
      error: function() {
        alert("Hubo un erro al obtener los datos");
      }

    });
  }

  $(function() {
    $("#getId").on("click", function() {
      const id = $("#idproverdorx").val();
      $("#idform").val(id)

    });

  });


  function productoId(idproducto) {

    const ruta = "<?= base_url(); ?>/proveedores/get_producto";

    data = {
      id_producto: idproducto

    }

    $.ajax({
      type: "POST",
      url: ruta,
      dataType: "JSON",
      data: data,
      success: function(response) {

        $("#precio").val(response[0].supplier_price);
        $("#acid").val(response[0].id_product);


      },

    });

  }

  function productoDelete(idproducto) {
    $("#id_product").val(idproducto);

  }


  //'use strict';

  $('#datatable1').DataTable({
    responsive: true,

    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_ items/page',
    }
  });

  /*$('#datatable3').DataTable({
    responsive: true,

    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_ items/page',
    }
  });*/

  $('#datatable2').DataTable({
    bLengthChange: false,
    searching: false,
    responsive: true
  });

  // Select2
  $('.dataTables_length select').select2({
    minimumResultsForSearch: Infinity
  });





  /*$('#datatable1').DataTable({
    responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
      }
});*/
</script>
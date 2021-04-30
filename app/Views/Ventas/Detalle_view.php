<link href="../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="../../assets/lib/select2/css/select2.min.css" rel="stylesheet">
<script src="../../assets/lib/jquery/jquery.js"></script>





<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active"></span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Detalle Venta</h5>
      <!--<p>DataTables is a plug-in for the jQuery Javascript library.</p>-->
    </div><!-- sl-page-title -->
    
    <div class="card pd-20 pd-sm-40">

      <div class="col-md-12 row">
        <div class ="col-md-6">
          <?php 
            echo('<h5 class="card-body-title">'."Vendedor:".$vendedor.'</h5>');

            foreach ($get_header as $header){
              setlocale(LC_ALL, 'es_MX');
              $fecha = (new \DateTime($header->c_date))->format("d-m-Y") . PHP_EOL;
              //$inicio = strftime("%A, %d de %B del %Y", strtotime($fecha));
              echo('<h5 class="card-body-title">'."Cliente:".$header->cliente.'</h5>');
              echo('<h5 class="card-body-title">'."Fecha:".$fecha.'</h5>');
            }
          
          ?>
        </div>

        <div class ="col-md-6">
          <img style="width: 100%;" src="../../../assets/img/logo_b.jpg"  alt="solimaq">

        </div>
      </div>

    <!--pagos -->

    
      <h6 class="card-body-title">Productos<button id="btnproductos" style="margin-left:10px" class="btn btn-info btn-circle"><i class="fa fa-plus-square"></i></button></h6>
  
      <!--<p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will</p>-->

      <div class="table-wrapper" id="tab_productos">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-20p">Nombre del Producto</th>
              <th class="wd-15p">Descripcion</th>
              <th class="wd-15">producto</th> 
              <th class="wd-15p">Precio</th>
              <th class="wd-15p">Porcentaje</th>
              <th class="wd-15p">Total</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //var_dump($get_header);
              $total_productos = array();
            foreach ($get_productos as $producto) {
              $porciento = round($producto->price * $producto->percent / 100, 2);
              $total_product = round($producto->price - $porciento, 2);
              array_push($total_productos,$total_product);

              echo ('<tr>');
                echo ('<td>' . $producto->name . '</td>');
                echo ('<td>' . $producto->description. '</td>');
                echo('<td>' . '<img src="../../../public/images/' .$producto-> media_path.'" class="img-thumbnail"
                style="height: 80px;"/>'.'</td>');
                echo ('<td>' . "$" .$producto->price. '</td>');
                echo ('<td>' . $producto->percent . '%'.'</td>');
                echo ('<td>' . "$" .$total_product.'</td>');
              echo ('</tr>');
            }
            $total_productos2 = array_sum($total_productos);

            echo ('<tr>');
                echo ('<td>' . "". '</td>');
                echo ('<td>' . "". '</td>');
                echo ('<td>' . "". '</td>');
                echo ('<td>' . "". '</td>');
                echo ('<td>'.'<strong>'. "Total".'</strong>'. '</td>');
                echo ('<td>'.'<strong>'.'$'. $total_productos2. '</strong>'. '</td>');
              echo ('</tr>');
            ?>
          </tbody>
        </table>
      </div><!-- table-wrapper -->

      


      <h6 class="card-body-title" style="margin-top: 20px;">Venta<button id="btnventa" style="margin-left:48px" class="btn btn-info btn-circle"><i class="fa fa-plus-square"></i></button></h6>
      <!--<p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will</p>-->

      <div class="table-wrapper" id="tab_venta">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-20p">Subtotal</th>
              <th class="wd-15p">Porcentaje</th>
              <th class="wd-15p">IVA</th>
              <th class="wd-15p">Total</th>
              <th class="wd-15p">Fecha</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //var_dump($get_productos);
            foreach ($get_sale as $venta) {
              $impuesto = round($venta->tax * $venta->subtotal / 100, 2);
              $total = round($impuesto + $venta->subtotal, 2);
              echo ('<tr>');
              echo ('<td>' . "$" . $venta->subtotal . '</td>');
              echo ('<td>' . $venta->tax . '%' . '</td>');
              echo ('<td>' . "$" . $impuesto . '</td>');
              echo ('<td>' . "$" . $total . '</td>');
              echo ('<td>' . $venta->c_date . '</td>');

              echo ('</tr>');
            }

            ?>
          </tbody>
        </table>
      </div><!-- table-wrapper -->
      <!-- Archivos -->
      <h6 class="card-body-title" style="margin-top: 20px;">Archivos<button id="btnmas" style="margin-left:25px" class="btn btn-info btn-circle"><i class="fa fa-plus-square"></i></button></h6>
      <div id="tbfiles">          
        <div class="col-md-4">
          <button class="btn btn-success" form="#obtenerid" data-toggle="modal" data-target="#modaldemo1">Subir Archivos</button>
          </div>
        <div class="table-wrapper" style="margin-top: 30px;">
          <table id="datatable2" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-20p">Archivos</th>
                <th class="wd-20p">Borrar</th>

              </tr>
            </thead>
            <tbody >
              <?php
              //var_dump($get_data);
              foreach ($get_data as $data) {
                $filename =  basename($data->path);
                echo ('<tr>');
                echo ('<td>' . '<a href="../../' . $data->path . '" target="_blank">' . $filename . '</a>');
                echo ('<td>' . '<button class="btn btn-danger" id="btnfile" data-toggle="modal" data-target="#delfile" onclick="fileId(' . $data->id . ')" id="actualizar">' . '<i class="fa fa-trash" aria-hidden="true"></i>
                ' . '</button>' . '</td>');
                
                // echo ('<td>' . $filename. '</td>');

                echo ('</tr>');
              }

              ?>
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div>  

      <h6 class="card-body-title" style="margin-top: 20px;">PAGOS<button id="btnpagos" style="margin-left:49px" class="btn btn-info btn-circle"><i class="fa fa-plus-square"></i>
                </button></h6>

      <div id="tb_pagos">          
        <div class="col-md-4">
          <button id="nuevopago" class="btn btn-purple" form="#pago" data-toggle="modal" data-target="#pago">Nuevo pago</button>
        </div>

        <div class="table-wrapper" style="margin-top: 30px;">
          <table id="datatable3" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-10p">Monto</th>
                <th class="wd-10p">status</th>
                <th class="wd-10p">Categoria Pago</th>
                <th class="wd-10p">Descripción</th>
                <th class="wd-10p">Evidencia</th>
                <th class="wd-10p">Actualizar</th>
                <th class="wd-10p">Borrar</th>

              </tr>
            </thead>
            <tbody id="tbfiles">
              <?php
              //var_dump($get_payments);
                $array = array();
              foreach ($get_payments as $payment) {
                array_push($array,$payment->amount);
                $filename =  basename($payment->path);

                echo ('<tr>');
                echo ('<td>' . '$' . $payment->amount . '</td>');
                echo ('<td>' . $payment->status . '</td>');
                echo ('<td>' . $payment->name . '</td>');
                echo ('<td>' . $payment->description . '</td>');
                echo ('<td>' . '<a href="../../' . $payment->path . '" target="_blank">' . $filename . '</a>');
                echo ('<td>' . '<button class="btn btn-primary" data-toggle="modal" data-target="#Actpago" onclick="actualizar(' . $payment->id . ')">' . 'Editar' . '</button>' . '</td>');
                echo ('<td>' . '<button class="btn btn-danger" data-toggle="modal" data-target="#delpago" onclick="borarId(' . $payment->id . ')" id="actualizar">' . 'Eliminar' . '</button>' . '</td>');
                echo ('</tr>');
              }

                $suma = array_sum($array);
              ?>
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      

      <div class="table-wrapper" style="margin-top: 10px;">
        <table id="mytable" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-10p">Pagado</th>
              <th class="wd-10p">Total venta</th>
              <th class="wd-10p">Adeudo</th>
            </tr>
          </thead>
          <tbody>
            <?php
           
              $adeudo = round ($total - $suma,2);
              echo ('<tr>');
              echo ('<td id="suma">' . '$' .$suma. '</td>');
              echo ('<td id="total">' .'$'. $total . '</td>');
              echo ('<td id="adeudo">' . '$'.$adeudo . '</td>');
              echo ('</tr>');
            ?>
          </tbody>
        </table>
      </div><!-- table-wrapper -->
    </div>  
    </div><!-- card -->

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

  <!--Modal carga de  Archivos -->

  <div id="modaldemo1" class="modal fade">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
      <div class="modal-content bd-0 tx-14">
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Subir Archivos</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-25">
          <form id="file" method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>/ventas/uploadfiles">
            <div class="col-lg-12">
              <div class="form-group">
                <?php
                foreach ($get_sale as $venta) {
                  echo ('<input type="hidden" name="id" value="' . $venta->id . '"/>');
                }
                ?>

                <input type="file" name="files[]" multiple />
              </div>
            </div><!-- col-4 -->
          </form>
        </div>
        <div class="modal-footer">
          <button form="file" type="submit" class="btn btn-info pd-x-20">Guardar</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->
</div><!-- sl-pagebody -->

<!--modal de pago  -->

<div id="pago" class="modal fade">
  <div class="modal-dialog modal-dialog-vertical-center" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Nuevo Pago</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25">
        <form id="pagos" method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>/ventas/agregar_pago">
          <div class="row row-xs">
            <label class="col-sm-6 form-control-label"><span class="tx-danger">*</span>Monto:</label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input name="monto" type="number" step="0.01" class="form-control" placeholder="Monto" required>
            </div>
          </div>

          <div class="row row-xs pd-5">
            <label class="col-sm-6 form-control-label"><span class="tx-danger">*</span>Descripcion:</label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input name="status" type="text" class="form-control" placeholder="Descripcion" required>
            </div>
          </div>


          <div class="row row-xs pd-5">
            <label class="col-sm-6 form-control-label"><span class="tx-danger">*</span>Tipo pago:</label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select id="empleado" name="id_pago" class="form-control select2" required>
                <option value="">Selecciona Pago</option>
                <?php
                foreach ($get_cat_payments as $pago) {
                  echo ('<option  value="' . $pago->id . '" name="pago">' . $pago->name . '</option>');
                }
                ?>
              </select>
            </div>
          </div>
          <?php
          foreach ($get_sale as $venta) {
            echo ('<input type="hidden"  name="id" value="' . $venta->id . '"/>');
          }
          ?>

          <div class="row row-xs pd-2">
            <label class="col-sm-6 form-control-label"><span class="tx-danger">*</span>Archivo:</label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="file" name="files[]" multiple  required/>
            </div>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button form="pagos" type="submit" class="btn btn-info pd-x-20">Guardar</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->
</div><!-- sl-pagebody -->


<!-- Actualizar Pago -->



<div id="Actpago" class="modal fade">
  <div class="modal-dialog modal-dialog-vertical-center" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar Pago</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25">
        <form id="Actpagos" method="POST" action="<?php echo base_url() ?>/ventas/update_pago">
          <div class="row row-xs">
            <label class="col-sm-6 form-control-label"><span class="tx-danger">*</span>Monto:</label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input id="monto" name="monto" type="number" step="0.01" class="form-control" placeholder="Monto" required>
            </div>
          </div>

          <div class="row row-xs pd-5">
            <label class="col-sm-6 form-control-label"><span class="tx-danger">*</span>Status:</label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input id="status" name="status" type="text" class="form-control" placeholder="Status" required>
            </div>
          </div>


          <div class="row row-xs pd-5">
            <label class="col-sm-6 form-control-label"><span class="tx-danger">*</span>Tipo pago:</label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select id="idpago" name="id_pago" class="form-control select2" required>

                <?php
                foreach ($get_cat_payments as $pago) {
                  echo ('<option  value="' . $pago->id . '" name="pago">' . $pago->name . '</option>');
                }
                ?>
              </select>
            </div>
          </div>
          <input type="hidden" id="id_payment" name="id_payment" type="text" class="form-control" required>

        </form>

      </div>
      <div class="modal-footer">
        <button form="Actpagos" type="submit" class="btn btn-info pd-x-20">Save changes</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->
</div>


<!-- Borrar Pago -->
<div id="delpago" class="modal fade">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Eliminar Pago</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <p class="mg-b-5">Realmente desea eliminar?</p>
        <form id="DeletePago" method="POST" action="<?php echo base_url() ?>/ventas/delete_pago">
          <input class="form-control" id="id_pagos" name="id_pagos" type="hidden">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button form="DeletePago" type="submit" class="btn btn-danger">Eliminar</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->

<!--Borrar Archivo -->


<div id="delfile" class="modal fade">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Eliminar Archivo</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <p class="mg-b-5">Realmente desea eliminar?</p>
        <form id="DeleteArch" method="POST" action="<?php echo base_url() ?>/ventas/delete_files">
          <input class="form-control" id="idfile" name="id_file" type="hidden">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button form="DeleteArch" type="submit" class="btn btn-danger">Eliminar</button>
        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->




<style>
  .btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
  }

  .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
  }

  #total{
    color:blue;
  }

  #adeudo{
    color:red;

  }

  #suma{
    color:green;

  }

  #btnfile{
    border-radius: 10px;
  }


</style>


<script src="../../assets/lib/datatables/jquery.dataTables.js"></script>
<script src="../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="../../assets/lib/select2/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>









<script>
  $("#tbfiles").hide();
  $("#tab_productos").hide();
  $("#tab_venta").hide();
  $("#tb_pagos").hide();

  $("#btnmas").click(function() {
    $("#tbfiles").toggle();
  });

  $("#btnproductos").click(function() {
    $("#tab_productos").toggle();
  });

  $("#btnventa").click(function() {
    $("#tab_venta").toggle();
  });

  $("#btnpagos").click(function() {
    $("#tb_pagos").toggle();
  });


  


  //Actualizar Pago

  //Actualizar Proveedor//
  function actualizar(idpayment) {
    //alert(idpayment);
    const ruta = "<?= base_url(); ?>/ventas/get_pago";
    data = {
      id_payment: idpayment

    }

    $.ajax({
      type: "POST",
      url: ruta,
      dataType: "JSON",
      data: data,
      success: function(response) {
        console.log(response);

        $("#monto").val(response[0].amount);
        $("#status").val(response[0].status);
        $('#idpago').val(response[0].id_cat_payments);
        $('#id_payment').val(response[0].id);

      },

    });


  }

  //Borrar pago 

  function borarId(idpago) {
    $('#id_pagos').val(idpago);

  }

  //Borrar Archivo 

  function fileId(idfile){
    $('#idfile').val(idfile);
  }



  /*$('#datatable1').DataTable({
    responsive: true,
    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_ items/page',
    }
  });*/


  //Valor del total adeudo 
  const valor = $("#adeudo").text();
  if(valor === "$0"){
    $("#nuevopago").prop('disabled', true);
  }


  </script>
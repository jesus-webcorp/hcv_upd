<script src="../../assets/lib/jquery/jquery.js"></script>

<link href="../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
<link href="../../assets/lib/select2/css/select2.min.css" rel="stylesheet">


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Solimaq</a>
        <span class="breadcrumb-item active">Productos</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Productos</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Catálogo de productos</h6>

            <p></p>

            <div class="col-md-3">
                <a href="" class="btn btn-info pd-x-20" data-toggle="modal" data-target="#modaldemo1">Nuevo producto</a><br><br>
            </div>


            <!-- BASIC MODAL -->
            <div id="modaldemo1" class="modal fade">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                    <div class="modal-content bd-0 tx-14">
                        <div class="modal-header pd-y-20 pd-x-25">
                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Registrar nuevo producto</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form method="POST" action="<?php echo base_url();?>/products/crearProducto" enctype="multipart/form-data">
                            <div class="modal-body pd-25">
                                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                    <h6 class="card-body-title">Nuevo producto</h6>
                                    <p class="mg-b-20 mg-sm-b-30">Inserte la información correspondiente en los siguientes campos.</p>
                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Nombre de pago: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto" required>
                                        </div>
                                    </div><!-- row -->

                                    <div class="row mg-t-20">
                                        <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <textarea rows="2" class="form-control" name="descripcion" placeholder="Descripción" required></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Imagen: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <input type="file" class="form-control" name="foto" />
                                        </div>
                                    </div><!-- row -->

                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Precio sugerido: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <input type="text" class="form-control" name="precioSugerido" placeholder="Precio sugerido" required>
                                        </div>
                                    </div><!-- row -->

                                </div><!-- card -->
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Registrar producto</button>
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
                            <th class="wd-15p">Descripción</th>
                            <th class="wd-15p">Imagen</th>
                            <th class="wd-15p">Precio sugerido</th>
                            <th class="wd-20p"> Acción</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($productos as $producto):?>
                        <tr>
                            <td><?php echo $producto->name;?></td>
                            <td> <?php echo $producto->description;?></td>
                            <td><img src="../../public/images/<?php echo $producto->media_path;?> " class="img-thumbnail"/></td>
                            <td> <?php echo $producto->su_price;?></td>
                            <td><button id="<?php echo $producto->id;?>" data-toggle="modal" data-target="#modal_update" class="btn btn-primary btn-update pd-x-20">Actualizar</button>
                            <button onclick="mandarId(<?php echo $producto->id;?>)"  data-toggle="modal" data-target="#modal_delete" class="btn btn btn-danger pd-x-20">Eliminar</button></td>
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
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Atención</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?php echo base_url().'/Products/delete_product'?>">
                        <div class="modal-body pd-20">
                            <p class="mg-b-5">¿Está seguro de que quiere eliminar el producto? </p>
                            <input  type="hidden" name="id_delete" id="id_delete">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-info pd-x-20">Eliminar</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <div id="modal_update" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Actualizar producto</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <form method="POST" action="<?php echo base_url().'/Products/actualizarProducto'?>" enctype="multipart/form-data">
                        <div class="modal-body pd-25">
                            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                <h6 class="card-body-title">Actualizar producto</h6>
                                <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
                                <p class="mg-b-20 mg-sm-b-30">Atención: cargar una nueva imagen reemplazará la anterior</p>
                                <div class="row">
                                    <!--   <label class="col-sm-4 form-control-label">Nombre del producto: <span class="tx-danger">*</span></label>-->
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <input type="text" class="form-control" name="update_name" id="update_name" placeholder="Nombre del producto" required>
                                    </div>
                                </div><!-- row -->

                                <div class="row mg-t-20">
                                    <!--  <label class="col-sm-4 form-control-label">Descripción: <span class="tx-danger">*</span></label>-->
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <textarea rows="2" class="form-control" name="update_descripcion" id="update_descripcion" placeholder="Descripción" required></textarea>
                                        <input type="hidden" name="id_product" id="id_product">
                                    </div>
                                </div>

                                <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Imagen: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <input type = file src="../../public/Images/'#newName'" class="form-control" name="update_foto">
                                        </div>
                                    </div><!-- row -->

                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Imagen: <span class="tx-danger">*</span></label>-->
                                        <div id="imagen"  class="col-lg-4">
                                            <!-- aqui va cargar la imagen dentro de este div -->
                                            
                                        </div>
                                    </div>


                                    <div class="row">
                                        <!--   <label class="col-sm-4 form-control-label">Precio sugerido: <span class="tx-danger">*</span></label>-->
                                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                            <input id="update_precioSugerido" type="text" class="form-control" name="update_precioSugerido" placeholder="Precio sugerido" required>
                                        </div>
                                    </div><!-- row -->

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




        <script src="../../assets/lib/datatables/jquery.dataTables.js"></script>
        <script src="../../assets/lib/datatables-responsive/dataTables.responsive.js"></script>
        <script src="../../assets/lib/select2/js/select2.min.js"></script>

        <script>

              $(document).ready(function() {
                        $('.btn-update').on('click', function() {
                            let id_buton = $(this).attr('id');
                            $('#id_product').val(id_buton);
                            let json = {
                                id: id_buton
                            };
                            $.ajax({
                                url: '<?php echo base_url().'/Products/get_data'?>',
                                type: "POST",
                                data: json,
                                dataType: "JSON",
                                success: function(success) {
                                    console.log(success);
                                    $('#update_name').val(success[0].name);
                                    $('#update_descripcion').val(success[0].description);
                                    $('#update_foto').val(success[0].media_path);
                                    $('#update_precioSugerido').val(success[0].su_price);

                                    let html = '';
                                     html += '<img src="../../public/Images/' + success[0].media_path + '" class="img-thumbnail" style="height =80px"/>'
                                    $('#imagen').html(html);

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

                        //Obtener id

                        function mandarId(id){
                            $("#id_delete").val(id);
                        }
          
        </script>
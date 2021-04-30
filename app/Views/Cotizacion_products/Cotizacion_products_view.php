      <script src="../../../../assets/lib/jquery/jquery.js"></script>


      <link href="../../../../assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
      <link href="../../../../assets/lib/select2/css/select2.min.css" rel="stylesheet">


      <!-- ########## START: MAIN PANEL ########## -->
      <div class="sl-mainpanel">
          <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="index.html">Starlight</a>
              <a class="breadcrumb-item" href="index.html">Tables</a>
              <span class="breadcrumb-item active">Data Table</span>
          </nav>

          <div class="sl-pagebody">
              <div class="sl-page-title">
                  <h5><?php echo $title;?></h5>
                  <p><?php echo $description;?></p>
              </div><!-- sl-page-title -->

              <div class="card pd-20 pd-sm-40">
               <div class="table-wrapper">
                <form method="POST" action="<?php echo base_url().'/Cotizacion_products/insert'?>">
                <!--Aqui empieza-->
                   <div class="row">
              <div class="col-lg-6">
                <label>Nombre del usuario:<span style="color:black;"> <?php echo $vendor; ?></span></label>
              </div><!-- col-4 -->

              <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                <label>Nombre del cliente:<span style="color:black;"> <?php echo $client;?></span></label>
              </div><!-- col-4 -->

                <!--Fin-->

                  <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <p>Selecciona el producto</p>
                  <select class="form-control" name="select_cat_products" id="select_cat_products">
                    <?php foreach($cat_product as $key):?>
                        <option value="<?php echo $key->id;?>"><?php echo $key->name;?></option>
                    <?php endforeach;?>
                  </select>
                </div>

                  <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                  <label>Poner un porcentaje</label>
                  <input type="text" class="form-control" name="percent" id="percent" placeholder="Ingrese numero porcentaje">
                  <br>
                  <button id="btn-insert-product" class="btn btn-success pd-x-20 btn-insert-product">Agregar producto</button>
                </div>
                  </div><!-- row -->
                  <div id="append_table">

                  </div>


          <div class="table-responsive mg-t-25">
            <table class="table table-hover table-bordered table-purple mg-b-0">
              <thead>
                <tr>
                  <th>Nombre del producto</th>
                  <th>Descripcion</th>
                  <th>Precio</th>
                  <th>Porcentaje</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody id="append_column">
                <?php

                if(empty($exist_data)){

                }else{

                  foreach ($exist_data as $key) {
                    echo "<tr class='".$key['id']."'>
                    <td>".$key['name']."</td><td>".$key['description']."</td>
                    <td>".$key['price']."</td>
                    <td>".$key['percent']."</td>
                    <td><button class='btn btn-danger pd-x-20 btn_base_delete' id='".$key['id']."'>Borrar</button></td>
                    </tr>";
                  }
                }

                ?>


              </tbody>
            </table>

                </div><!-- table-wrapper -->

                  <br>
                  <label>Cantidad total</label>
                  <input type="text" name="total_products" id="total_products" class="form-control">
                  <div id="append_input_hiden"></div>
                  <input type="hidden" name="id_cotization" value="<?php echo $id_cotization;?>">

                  <br>
                  <input type="submit" class="btn btn-info pd-x-20" name="Enviar datos">
                </form>
              </div><!-- card -->
            </div><!--Card-pad-->
          </div><!--Div page body-->
        </div><!--Main panel-->




              <script>


                      let contador=0;
                      let id_x_tr=0;

                      let sum=[];
                              $('#btn-insert-product').on('click', function(e) {
                                e.preventDefault();
                                  let id_buton = $("#select_cat_products option:selected").val();
                                  let percent=$('#percent').val();
                                  let percent_without=percent.replace('.','');

                                  if(!isNaN(percent_without) && percent_without!=""){

                                   $('#append_input_hiden').append("<input type='hidden' value='"+percent_without+"' id='percent_insert' name='percent_insert[]' multiple required>");
                                  $('#percent').val('');

                                  let json = {
                                      id: id_buton
                                  };
                                  $.ajax({
                                      url: '<?php echo base_url().'/Cotizacion_products/get_products_json'?>',
                                      type: "POST",
                                      data: json,
                                      dataType: "JSON",
                                      success: function(success) {
                                        $('#append_column').append("<tr class='"+id_x_tr+"'><td>"+success[0].name+"</td><td>"+success[0].description+"</td><td>"+success[0].su_price+"</td><td>"+"%"+percent_without+"</td><td><button class='btn_delete' id='"+id_x_tr+"'>Borrar</button></td></tr>");
                                        $('#append_input_hiden').append("<input type='hidden' value='"+id_buton
                                          +"' id='id_product' name='id_product[]' multiple required>");
                            $('#append_input_hiden').append("<input type='hidden' value='"+success[0].su_price+"' id='price_product"+id_x_tr+"' name='price_product[]' multiple required>");
                            /*Aqui es el porciento */
                            $('#append_input_hiden').append("<input type='hidden' value='"+percent_without+"' id='percent_product"+id_x_tr+"' name='price_product[]' multiple required>");

                                    /*Sacar el procentaje para la suma*/
                                      let precio=success[0].su_price;
                                      let porcentaje=parseFloat(percent_without)/100;
                                      let porcentaje_total=porcentaje*parseFloat(precio);
                                    /*Fin*/
                                    console.log("precio "+precio);
                                    console.log("porcentaje "+porcentaje);
                                    console.log("porcentaje_total "+porcentaje_total);
                                    let cont_sum_total=0;//Sirve para sumar el array de los datos

                                        let suma_final=precio-porcentaje_total;
                                        console.log("suma final "+suma_final);
                                        sum.push(suma_final);
                                        console.log(sum);

                                        /*Suma los valores */
                                        sum.forEach(function(numero){
                                          cont_sum_total+=numero;
                                        })
                                        $('#total_products').val(cont_sum_total);

                                        borrar();
                                        id_x_tr++;
                                      }

                                  }); //AJAX


                                     }else{
                                      alert('Por favor ingresa un numero de porcentaje');
                                     }

                              });





                    //Quitar el producto que esta guardado en la base de datos

                    $('.btn_base_delete').on('click',function(e){
                      e.preventDefault();
                      let id=$(this).attr('id');
                      let id_cotization=<?php echo $id_cotization;?>;

                      let json={id,id_cotization};
                      $.ajax({
                        url: '<?php echo base_url().'/Cotizacion_products/delete_producto_from_db'?>',
                        type: "POST",
                        data: json,
                        dataType: "JSON",
                        success: function(success) {
                          console.log(success);
                          $('.'+id).remove();
                        }
                      });


                    });


                function borrar(){
                  $('.btn_delete').on('click',function(e){
                    e.preventDefault();
                      let suma_x_eliminar=0;//variable que nos ayuda a sumar el sum
                      let id=$(this).attr('id');

                      let old_number=$('#price_product'+id).val();
                      let percent_old=$('#percent_product'+id).val();
                      /*Aqui es cuando mostramos el procedimiento*/
                      if(typeof old_number==="undefined"){
                        console.log("Es undefined");
                        return 0;
                      }
                      let porcentaje=parseFloat(percent_old)/100;
                      let porcentaje_total_eliminar=porcentaje*parseFloat(old_number);

                      let total_eliminar=parseFloat(old_number)-parseFloat(porcentaje_total_eliminar);

                      /*Fin*/



                     //Sumar el sum
                     sum.forEach (function(numero){
                      suma_x_eliminar += numero;
                    });


                     let total=parseFloat(suma_x_eliminar)-parseFloat(total_eliminar);
                     /*Aqui esta bien*/

                     $('#total_products').val(total);
                     $('.'+id).remove();
                     $('#price_product'+id).remove();
                     $('#percent_product'+id).remove();

                     console.log("/////////////////////////////");
                     console.log("old_number "+old_number);
                     console.log("percent_olg "+percent_old);
                     console.log('porcentaje_total_eliminar '+porcentaje_total_eliminar);
                     console.log('total a eliminar '+total_eliminar);
                     console.log('total '+total);

                    })
              }
              </script>
              </div>
</div>
   <script src="../../assets/lib/jquery/jquery.js"></script>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="<?php echo base_url().'/contratos/get_table'?>">Regresar</a>
        <span class="breadcrumb-item active">Contrato</span>
      </nav>

      <div class="sl-pagebody">
        <div class="row row-sm mg-t-20">
          <div class="col-xl-12">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <form method="POST" action="<?php echo base_url().'/contratos/insert_wyswyg'?>">
              <h6 class="card-body-title">Generacion de contrato</h6>
              <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
              <div class="row">
                <label class="col-sm-4 form-control-label">Nombre: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
              </div><!-- row -->
              <div class="row">
                <label class="col-sm-4 form-control-label">f: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <select class="form-control" id="id_selected" name="id_selected">
                    <option>Elige una opcion por favor</option>
                    <?php 
                    foreach ($selected as $key) {
                      echo ('<option  value="' . $key['id'] . '" name="type_contract">' . $key['name']. '</option>');
                    }

                    ?>
                  </select>
                </div>
              </div><!-- row -->
              <div class="row">
                <div class="col-sm-8 mg-t-10 mg-sm-t-0" id="append_buttons">
                <!--  <button class="append_name">Agregar Nombre</button>
                  <button id="append_rfc" class="append_rfc">Agregar RFC</button>
                  <button id="append_fecha" class="append_fecha">Agregar Fecha</button>
                  <button id="append_cliente" class="append_cliente">Agregar cliente</button>

                  <button id="append_monto" class="append_monto">Agregar Monto</button>-->
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Generacion de contrato: <span class="tx-danger">*</span></label>

                  <textarea id="txt" class="txt" name="txt" placeholder="Type in some Text...." class=" tail-writer-editor txt" data-tail-writer="tail-2">
                  </textarea>

              </div>

              <div class="form-layout-footer mg-t-30">
                <button class="btn btn-info mg-r-5" type="submit">Submit Form</button>
                <button class="btn btn-secondary">Cancel</button>
              </div><!-- form-layout-footer -->
            </form>

            </div><!-- card -->
          </div><!-- col-6 -->

        </div><!-- row -->

      </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="https://cdn.ckeditor.com/4.15.0/full-all/ckeditor.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        CKEDITOR.replace('txt', {


          // Configure your file manager integration. This example uses CKFinder 3 for PHP.
          filebrowserBrowseUrl: '<?php echo path ?>ckfinder/ckfinder.html',
          filebrowserImageBrowseUrl: '<?php echo path ?>ckfinder/ckfinder.html?type=Images',
          filebrowserUploadUrl: '<?php echo path ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
          filebrowserImageUploadUrl: '<?php echo path ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

          // Upload dropped or pasted images to the CKFinder connector (note that the response type is set to JSON).
          uploadUrl: '<?php echo path ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

          // Reduce the list of block elements listed in the Format drop-down to the most commonly used.
          format_tags: 'p;h1;h2;h3;pre',
          // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
          removeDialogTabs: 'image:advanced;link:advanced',

          height: 450
        });
      });
    </script>


    <script type="text/javascript">
      $(document).ready(function(e){

          $("select[name=id_selected]").change(function(){
           // alert($('select[name=id_selected]').val());
           let id=$('select[name=id_selected]').val();
           if(id==1){
            let editor=CKEDITOR.instances['txt'].getData();
            let html=editor+"{name}";
            CKEDITOR.instances['txt'].setData(html);
           }else if(id==2){
            let editor=CKEDITOR.instances['txt'].getData();
          let html=editor+"{cliente}";
          CKEDITOR.instances['txt'].setData(html);
           }else if(id==4){
            let editor=CKEDITOR.instances['txt'].getData();
          let html=editor+"{monto}";
          CKEDITOR.instances['txt'].setData(html);
           }else if(id==5){
            let editor=CKEDITOR.instances['txt'].getData();
          let html=editor+"{fecha}";
          CKEDITOR.instances['txt'].setData(html);
        }else if(id==6){
            let editor=CKEDITOR.instances['txt'].getData();
          let html=editor+"{rfc}";
          CKEDITOR.instances['txt'].setData(html);
        }


      })




    
      })
    </script>


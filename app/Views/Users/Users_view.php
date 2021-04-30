<script src="../../assets/lib/jquery/jquery.js"></script>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">
        <div class="row row-sm mg-t-20">
          <div class="col-xl-12">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <form method="POST" action="<?php echo base_url().'/users/insert_client'?>">
              <h6 class="card-body-title">Registro</h6>
              <p class="mg-b-20 mg-sm-b-30">Inserte por favor los siguientes campos.</p>
              <div class="row">
                <label class="col-sm-4 form-control-label">Nombre de usuario: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" name="username" placeholder="Enter firstname">
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">E-mail: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" name="email" placeholder="Enter lastname">
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Password:</label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Selecciona el tipo de grupo: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <select name="id_group" class="form-control" id="id_group">
                    <option value="">Selecciona un grupo</option>
                    
                    <?php foreach($groups as $key):?>
                      <option value="<?php echo $key->id?>"><?php echo $key->name;?></option>
                    <?php endforeach;?>
                  </select>
                </div>

              </div>

              <!--Clientes-->
              <div class="row mg-t-20" id="aggreate_data_client">
                
                
              </div>

              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Acerca de mi: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="2" class="form-control" name="about" placeholder="Acerca de ti"></textarea>
                </div>
              </div>
              <div class="form-layout-footer mg-t-30">
                <button class="btn btn-info mg-r-5" type="submit">Submit Form</button>
                
              </div><!-- form-layout-footer -->
            </form>

            </div><!-- card -->
          </div><!-- col-6 -->
          
        </div><!-- row -->
        
        <script type="text/javascript">

          $('#id_group').change(function(){
            let select_group=document.getElementById('id_group');
          let selected_type_group_value = select_group.options[select_group.selectedIndex].value;
              if(selected_type_group_value==1){
              $('#aggreate_data_client').html('<div class="row mg-t-20" id="div_client"><label class="col-sm-4 form-control-label">Nombre del cliente<span class="tx-danger">*</span></label><div class="col-sm-8 mg-t-10 mg-sm-t-0 mg-b-10"><input type="text" name="name_client" class="form-control"></div><label class="col-sm-4 form-control-label">RFC<span class="tx-danger">*</span></label><div class="col-sm-8 mg-t-10 mg-sm-t-0 mg-b-10"><input type="text" name="rfc" class="form-control"></div><label class="col-sm-4 form-control-label">Pais<span class="tx-danger">*</span></label><div class="col-sm-8 mg-t-10 mg-sm-t-0 mg-b-10"><input type="text" name="address_country" class="form-control"></div><label class="col-sm-4 form-control-label">Municipio<span class="tx-danger">*</span></label><div class="col-sm-8 mg-t-10 mg-sm-t-0 mg-b-10"><input type="text" name="addres_county" class="form-control"></div><label class="col-sm-4 form-control-label">Ciudad<span class="tx-danger">*</span></label><div class="col-sm-8 mg-t-10 mg-sm-t-0 mg-b-10"><input type="text" name="addres_city" class="form-control"></div><label class="col-sm-4 form-control-label">Calle<span class="tx-danger">*</span></label><div class="col-sm-8 mg-t-10 mg-sm-t-0 mg-b-10" ><input type="text" name="address_street" class="form-control"></div><label class="col-sm-4 form-control-label">Codigo postal<span class="tx-danger">*</span></label><div class="col-sm-8 mg-t-10 mg-sm-t-0 mg-b-10"><input type="text" name="address_postal_code" class="form-control"></div><label class="col-sm-4 form-control-label">Numero<span class="tx-danger">*</span></label><div class="col-sm-8 mg-t-10 mg-sm-t-0 mg-b-10"><input type="text" name="address_number" class="form-control"></div></div>');
              }else{
                $('#div_client').remove();
              }          
            
          });
        </script>
          

            

      </div><!-- sl-pagebody -->
     
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


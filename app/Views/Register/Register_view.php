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
              <form method="POST" action="<?php echo base_url().'/register/insert_user'?>">
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
                  <select name="id_group" class="form-control">
                    <option value="">Selecciona un grupo</option>
                    <?php foreach($groups as $key):?>
                      <option value="<?php echo $key->id?>"><?php echo $key->name;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Acerca de mi: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="2" class="form-control" name="about" placeholder="Acerca de ti"></textarea>
                </div>
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
    <!-- ########## END: MAIN PANEL ########## -->


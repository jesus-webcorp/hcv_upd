<div class="sl-mainpanel">
    <form id="Nprovedor" method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>/uploads_files/guardar">
        <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">CARPETA: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="carpeta" placeholder="Nombre" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Pais <span class="tx-danger">*</span></label>
                    <input type="file" name="files[]" multiple />
                  </div>
                </div><!-- col-4 -->
              </div><!-- row -->
              <input type="submit" value="Enviar">
        </div>      
    </form>


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
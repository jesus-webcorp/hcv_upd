<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Modal</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>CRUD GRUPOS</h5>
          <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
        </div><!-- sl-page-title -->

        <div class="card">
          <div class="pd-t-40 pd-x-40">
            <h6 class="card-body-title">Basic Modal</h6>
            <p class="mg-b-35">Below is the static example of the basic modal.</p>
          </div>
          <div class="pd-y-50 bg-gray-600">
            <!-- this modal is static modal for presentation purpose. -->
            <!-- class .d-block annd .pos-relative in .modal is for demo only -->
            <div class="modal d-block pos-static">
              <div class="modal-dialog" role="document">
                <div class="modal-content bd-0">
                  <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crear Nuevo Grupo</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body pd-25">
                    
                    <p class="mg-b-5"></p>

                    <div>
                      <form>
                        <div>
                          <label>Nombre:</label>
                          <input type="" name="">
                        </div>
                        <div>
                          <label>Descripción:</label>
                          <input type="" name="">
                        </div>
                        <div>
                          <label>Activo</label>
                          <input type="" name="">
                        </div>
                        <div>
                          <label>Fecha</label>
                          <input type="" name="">
                        </div>

                      </form>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-info pd-x-20">Guardar</button>
                    <button type="button" class="btn btn-secondary pd-x-20">Cerrar</button>
                  </div>
                </div>
              </div><!-- modal-dialog -->
            </div><!-- modal -->
          </div><!-- pd-y-50 -->
          <div class="pd-y-30 tx-center bg-gray-700">
            <a href="" class="btn btn-info pd-x-20" data-toggle="modal" data-target="#modaldemo12">Nuevo Grupo</a>
          </div><!-- pd-y-30 -->
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
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- BASIC MODAL -->
    <div id="modaldemo12" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">CREAR NUEVO GRUPO</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <p class="mg-b-5">
               <div>
                      <form>
                        <div>
                          <label>Nombre:</label>
                          <input type="" name="">
                        </div>
                        <div>
                          <label>Descripción:</label>
                          <input type="" name="">
                        </div>
                        <div>
                          <label>Activo</label>
                          <input type="" name="">
                        </div>
                        <div>
                          <label>Fecha</label>
                          <input type="" name="">
                        </div>

                      </form>
                    </div>
             </p>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-info pd-x-20">Guardar</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- SMALL MODAL -->
    <div id="modaldemo2" class="modal fade">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-20">
            <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-info pd-x-20">Save changes</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/highlightjs/highlight.pack.js"></script>

    <script src="../js/starlight.js"></script>

  </body>
</html>

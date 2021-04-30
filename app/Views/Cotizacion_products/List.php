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






            <div class="table-responsive mg-t-25">
              <table class="table table-hover table-bordered table-purple mg-b-0">
                <thead>
                  <tr>
                    <th>Pdf</th>

                  </tr>
                </thead>
                <tbody id="append_column">
                  <?php foreach($liga as $key):?>
                    <td><a href="<?php echo base_url().'/cotizacion_products/report_view/'.$key['id'];?>">Nota</a></td>
                  <?php endforeach;?>

                </tbody>
              </table>

            </div><!-- table-wrapper -->


          </div><!-- card -->
        </div><!--Card-pad-->
      </div><!--Div page body-->
    </div><!--Main panel-->

  </div>
</div>
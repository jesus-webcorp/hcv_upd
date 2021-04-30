    <link href="../../assets/css/linetime.css" rel="stylesheet">

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <div class="table-wrapper">
        <button class="btn btn-success" data-toggle="modal" data-target="#modaldemo3">Actualizar seguiminto</button>
        


        <div class="container">
          <h2>Product name</h2>
          <ul id='timeline'>
            <!--Empezamos li-->
            <?php foreach ($cat_sales as $key) : ?>

              <li class='work'>
                <input class='radio' id='work"<?php echo $key["id"]; ?>"' name='works' type='radio' checked>
                <div class="relative">
                  <label for='work"<?php echo $key["id"]; ?>"'><?= $key['name'] ?></label>
                  <span class='date'><?php echo $key['position']; ?></span>
                  <span class='circle'></span>
                </div>
                <div class='content'>
                  <p>
                    <?php echo $key['description'] ?>
                  </p>
                </div>

                <!--Fin de li-->
              </li>


            <?php endforeach; ?>
          </ul>
        </div><!-- table-wrapper -->
      </div><!-- card -->
    </div>
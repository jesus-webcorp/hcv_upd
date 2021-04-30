
    <script src="<?=base_url()?>/../../assets/lib/jquery/jquery.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/popper.js/popper.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/bootstrap/bootstrap.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/jquery-ui/jquery-ui.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/d3/d3.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/rickshaw/rickshaw.min.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/chart.js/Chart.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/Flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>/../../assets/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="<?=base_url()?>/../../assets/js/starlight.js"></script>
    <script src="<?=base_url()?>/../../assets/js/ResizeSensor.js"></script>

    <?php
    foreach ($scripts as $key) {
        echo "<script src=\"".base_url()."/../../assets/js/$key\"></script>\"";
    }
    ?>

  </body>
</html>
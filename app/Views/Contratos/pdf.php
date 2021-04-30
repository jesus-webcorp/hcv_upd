<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Comprobante</title>
    <link rel="stylesheet" href="../assets/css/style_pdf.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../assets/img/logo_b.jpg">
      </div>
      <h1>Comprobante</h1>
      <div id="company" class="clearfix">
        <div>SOLIMAQ</div>
        <div><span>Usuario</span>:<?php echo $query[0]['user_name'];?></div>

        <div><a href="mailto:<?php echo $query[0]['email'];?>"><?php echo $query[0]['email'];?></a></div>
      </div>
      <div id="project">
        
      </div>
    </header>
    <main>
      <h3><?php echo $query[0]['name'];?></h3>
      <?php echo $body;?>
      
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Webcorp. Derechos reservado</div>
      </div>
    </main>
    <footer>
      Facturation was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>
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
        <div><span>Vendedor</span>:<?php echo $vendor[0]['user_name'];?></div>

        <div><a href="mailto:<?php echo $vendor[0]['user_name'];?>"><?php echo $vendor[0]['email'];?></a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website Solimaq</div>
        <div><span>CLIENT</span> <?php echo $client[0]['user_name']?></div>
        <div><span>ADRESS</span> <?php echo $address_client[0]->adress_country.' '.$address_client[0]->adress_city.' '.$address_client[0]->adress_postal_code;?></div>
        <div><span>EMAIL</span> <a href="mailto:<?php echo $client[0]['email'];?>"><?php echo $client[0]['email'];?></a></div>
        <div><span>DATE</span> August 17, 2015</div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">PRODUCTO</th>
            <th>IMAGEN</th>
            <th class="desc">DESCRIPCION</th>
            <th>PRECIO</th>
            <th>PORCENTAJE</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $contador=0;
          foreach ($query as $key):

          ?>
          <tr style="background: #ccccff;">
            <td class="service"><?php echo $key['name'];?></td>
            <td class="service"><img src="<?php echo path."public/images/".$key['media_path'];?>"  width="50" height="60"></td>
            <td class="desc"><?php echo $key['description'];?></td>
            <td class="unit">$<?php echo $key['price'];?></td>
            <td class="qty"><?php echo "%".$key['percent']?></td>
            <td class="total"><?php
            $percent=$key['percent']/100;
            $total=$percent*$key['price'];
            $total_final=$key['price']-$total;
            $contador+=$total_final;
            echo "$".$total_final;
            ?></td>
          </tr>

        <?php endforeach;?>
        <tr>
            <td colspan="4">TOTAL</td>
            <td class="total">$<?php echo $contador;?></td>
          </tr>

        </tbody>
      </table>
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
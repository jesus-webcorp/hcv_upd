<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
</head>
<body>
	<?php
	$date=date("d") . " del " . date("m") . " de " . date("Y");

	$old= array('{name}','{cliente}','{monto}','{fecha}','{rfc}');
	$new=array($query[0]['user_name'],$name_client,$venta,$date,$rfc);

	$content=str_replace($old, $new, $wyswyg);


	?>
	<?php echo $content;?>
</body>
</html>
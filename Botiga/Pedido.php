<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$datos="";
if (!empty($_REQUEST['datos'])){
$datos=$_REQUEST['datos'];
}
 
$cantidad="";
if (!empty($_REQUEST['cantidad'])){
$cantidad=$_REQUEST['cantidad'];
}
//Luego sobrescribo el txt
 
$archivo="Carrito.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file,$datos,$cantidad);

	?>
</body>
</html>
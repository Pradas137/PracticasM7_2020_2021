<!DOCTYPE html>
<html>
<head>
	<title>GetBotiga</title>
</head>
<body>
<h2>GetBotiga</h2>
<?php


$nombe = $_POST['nombre'];
$descripcion = $_POST['descripcion']; 
$precio = $_POST['precio']; 

$file = fopen("productos.cfg","a");
fwrite($file, "nombre: " . $nombre . "\r\n");
fwrite($file, "descripcion: " . $descripcion . "\r\n");
fwrite($file, "descripcion: " . $precio . "\r\n");
fclose($file)

?>
<?php

$filas= file('productos.cfg');
echo "<table border=1>";
foreach ($filas as $i) {
	$a = explode(":", $i);
	echo "<tr><td>{$a[0]}</td>
	<td>{$a[1]}</td>
	<td>{$a[2]}</td></tr>";

};
echo "</table>";
?>

<?php

?>

</body>
</html>
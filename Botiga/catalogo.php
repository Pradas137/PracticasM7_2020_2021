<!DOCTYPE html>
<html>
<head>
	<title>Catalogo</title>
</head>
<body>
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

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Select Botiga</title>
	<link rel="stylesheet" href="CSS/Botiga.css">

</head>
<body>
<form action="" method="post" class="text-center form-inline">
	<?php
	$fichero = file('productes.txt');
	$options = '';
	foreach ($datos as $fichero) {
		$options .= '<option value="'.$fichero.'">'.$fichero.'</option>';
	}
	$select = '<select name="datos">'.$options.'</select>';
	echo $select;
	?>
	<div>
		<label for="cantidad">Cantidad:</label>
		<input type="number" id="cantidad" name="cantidad">
	</div>
	<button type="submit" id="buton" class="btn btn-primary btn-block" name="submit">Enviar</button>
</form>
</body>
</html>
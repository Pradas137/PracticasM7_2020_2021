<html>
	<head>
		<title>Carrito</title>
		<link rel="stylesheet" href="CSS/Botiga.css">
	</head>
	<body>
		<form action="Pedido.php" method="post">
            <label for="cantidad">Cantidad:</label>
			<input type="number" name="cantidad" size="30"><br/>
			<p>
            <label for="producto">Seleccionar Producto:</label>
			<select for="producto" name='producto'>
            <?php
                define("fileName", "productes.txt");
                global $productos;
                global $options;
                $productoLines=file_get_contents(fileName);
                $productos=explode("\n",$productoLines);

                foreach($productos as $producto){
                        $options.='<option value="'.$producto.'">'.$producto.'</option>';
                }
                echo $options;
            ?>
        </select>
			<input type="submit" value="Enviar!">
		</form>
	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Pedido</title>
	<link rel="stylesheet" href="CSS/Botiga.css">
</head>
<body>
	<h1>Mostrar Pedido</h1>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $productos = fopen("Carrito.txt", "a");
            $nuevoProducto = $_POST['cantidad'].";".$_POST['producto'];
            fwrite($productos, "\n");
            fwrite($productos, $nuevoProducto);
            fclose($productos);
        }
    ?>
</body>
</html>
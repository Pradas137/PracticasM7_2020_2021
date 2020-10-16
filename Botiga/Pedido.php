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
    <div id="Contenedor">
        <a href="Pediddo.php" id="enlace">Añadir</a>
    </div>

    <h1>Mostrar Productos</h1>
    <?php
        $productosGet = fopen("Carrito.txt", "r");
        $listaProductos = [];
        while(!feof($productosGet)) {
            $Conjunto = fgets($productosGet);
            $producto = explode(';', $Conjunto);
            array_push($listaProductos, $producto);
        }
        fclose($productosGet);
    ?>
    <table id="tabla">
            <th>Cuantitat</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>

            <?php
            foreach ($listaProductos as $key => $producto) {
                echo "<tr>";
                echo "<td>";
                echo $producto[0];
                echo "</td>";
                echo "<td>";
                echo $producto[1];
                echo "</td>";
                echo "<td>";
                echo $producto[2];
                echo "</td>";
                echo "<td>";
                echo number_format((float)$producto[3], 2, ",", " ")." €";
                echo "</td>";
                echo "</tr>";
            }
            ?>
    </table>

</body>
</html>
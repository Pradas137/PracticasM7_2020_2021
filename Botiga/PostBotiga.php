
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostBotiga</title>
    <link rel="stylesheet" href="CSS/Botiga.css">
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productos = fopen("productos.cfg", "a");
            $nuevoProducto = $_POST['Nombre'].";".$_POST['Descripcion'].";".$_POST['Precio'];;
            fwrite($productos, "\n");
            fwrite($productos, $nuevoProducto);
            fclose($productos);
        }
    ?>
    <?php
        $productos = fopen("productos.cfg", "r");
        $listaProductos = [];
        while(!feof($productos)) {
            $Conjunto = fgets($productos);
            $producto = explode(';', $Conjunto);
            array_push($listaProductos, $producto);
        }
        fclose($productos);
    ?>
    <table id="tabla">
        <thead>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
        </thead>
        <tbody>
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
                echo number_format((float)$producto[2], 2, ",", " ")." €";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
	<a href=GetBotiga.php>Añadir</a>
</body>
</html>
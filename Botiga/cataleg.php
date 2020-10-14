
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostBotiga</title>
    <link rel="stylesheet" href="CSS/Botiga.css">
</head>
<body>
    <h1>Mostrar Productos</h1>
    <?php
        $productosGet = fopen("productes.txt", "r");
        $listaProductos = [];
        while(!feof($productosGet)) {
            $Conjunto = fgets($productosGet);
            $producto = explode(';', $Conjunto);
            array_push($listaProductos, $producto);
        }
        fclose($productosGet);
    ?>
    <table id="tabla">
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
                echo number_format((float)$producto[2], 2, ",", " ")." €";
                echo "</td>";
                echo "</tr>";
            }
            ?>
    </table>
    <div id="Contenedor">
        <a href="nou_producte.html" id="enlace">Añadir</a>
    </div>
</body>
</html>
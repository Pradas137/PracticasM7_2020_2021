<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="CSS/Botiga.css">
</head>
<body>

    <?php
    session_start();
    if (!isset($_SESSION["Carrito"])) {
        $_SESSION["Carrito"] = [];
    }
    $fichero= file("productes.txt");
    $catalogo = [];
    foreach ($fichero as $key => $fichero) {
        $producto= explode(';', $fichero);
        array_push($producto, $key);
        array_push($catalogo, $producto);
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['producto'], $_GET['cantidad'])) {
            $producto = $catalogo[$_GET['producto']];
            array_push($producto, $_GET['cantidad']);
            array_push($_SESSION["Carrito"], $producto );
        }
        if (isset($_GET['line'])) {
            unset($_SESSION["Carrito"][$_GET['line']]);
        }
    }
    ?>


    <div>
        <table id="tabla">
            <h1>Mostrar Nuevo Producto</h1>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Eliminar</th>
                <?php
                    foreach ($_SESSION["Carrito"] as $key => $producto) {
                        echo "<tr>";
                        echo "<td>$producto[0]</td>";
                        echo "<td>", number_format((float)$producto[2], 2, ",", " ") . " €", "</td>";
                        echo "<td>$producto[4]</td>";
                        echo "<td><a class=\"btn btn-danger\" href=Pedido.php?line=$key><span class=\"fas fa-trash\"></span> Delete</a></td>";
                        echo "</tr>";
                    }
                ?>
                <tr>
                    <form action="Pedido.php" method="get">
                        <td colspan="2">            
                            <select class="form-control" id="selectProduct" name="producto">
                                <?php
                                foreach ($catalogo as $key => $producto) {
                                    echo "<option value=$key>$producto[0] | $producto[2]€</option>";
                                }
                                ?>
                            </select>                        
                        </td>
                        <td>            
                            <input type="number" class="form-control" id="cantidad" placeholder="1" name="cantidad" step="1" required>                   
                        </td>
                        <td>
                            <a href="Pedido.php" id="enlace">Añadir</a>
                        </td> 
                    </form>
                </tr>
            </tbody> 
        </table> 
    </div> 

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="CSS/Botiga.css">
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION["Carrito"])) {
        $_SESSION["Carrito"] = [];
    }
    $fichero = file("productes.txt");
    $catalogue = [];
    foreach ($fichero as $key => $fichero) {
        $product = explode(';', $fichero);
        array_push($product, $key);
        array_push($catalogue, $product);
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['productId'], $_GET['productQty'])) {
            $product = $catalogue[$_GET['productId']];
            array_push($product, $_GET['productQty']);
            array_push($_SESSION["Carrito"], $product );
        }
        if (isset($_GET['line'])) {
            unset($_SESSION["Carrito"][$_GET['line']]);
        }
    }
    ?>
    <div>
        <table>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Actions</th>
                <?php
                    foreach ($_SESSION["Carrito"] as $key => $product) {
                        echo "<tr>";
                        echo "<td>$product[0]</td>";
                        echo "<td>", number_format((float)$product[2], 2, ",", " ") . " €", "</td>";
                        echo "<td>$product[4]</td>";
                        echo "<td><a class=\"btn btn-danger\" href=Pedido.php?line=$key><span class=\"fas fa-trash\"></span> Delete</a></td>";
                        echo "</tr>";
                    }
                ?>
                <tr>
                    <form action="Carrito.php" method="get">
                        <td colspan="2">            
                            <select class="form-control" id="selectProduct" name="productId">
                                <?php
                                foreach ($catalogue as $key => $product) {
                                    echo "<option value=$key>$product[0] | $product[2]€</option>";
                                }
                                ?>
                            </select>                        
                        </td>
                        <td>            
                            <input type="number" class="form-control" id="productQty" placeholder="1" name="productQty" step="1" required>                   
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary"><span class="fas fa-plus"></span> Add</button> 
                        </td> 
                    </form>
                </tr>
        </table> 
    </div> 

    
</body>
</html>
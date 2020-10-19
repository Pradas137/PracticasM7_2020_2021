<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="CSS/Botiga.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b17b075250.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION["Carrito"])) {
        $_SESSION["Carrito"] = [];
    }
    $file_lines = file("productes.txt");
    $catalogue = [];
    foreach ($file_lines as $key => $file_line) {
        $product = explode(';', $file_line);
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
        <table id="tabla">
            <h1>Mostrar Nuevo Producto</h1>
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
                    <form action="Pedido.php" method="get">
                        <td colspan="2">            
                            <select class="form-control" id="Producto" name="ProductoId">
                                <?php
                                foreach ($catalogue as $key => $product) {
                                    echo "<option value=$key>$product[0] | $product[2]€/Unidad</option>";
                                }
                                ?>
                            </select>                        
                        </td>
                        <td>            
                            <input type="number" class="form-control" id="productQty" placeholder="1" name="productQty" step="1" required>                   
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary"><span class="fas fa-plus"></span> Añadir</button> 
                        </td> 
                    </form>
                </tr> 
        </table> 
    </div> 

    
</body>
</html>
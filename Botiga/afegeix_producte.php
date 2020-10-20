<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostBotiga</title>
    <link rel="stylesheet" href="CSS/Botiga.css">
    <link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>


</head>
<body>
    <h1>Informacion Producto Añadidio</h1>

    <div id="alert" class = "alert alert-info">
        <strong> ¡Nota importante! Esta seguro que quiere añadir este producto anterior.</strong> Si lo esta clique el botón <strong>añadir</strong>.
    </div>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $productos = fopen("productes.txt", "a");
            $nuevoProducto = $_POST['Nombre'].";".$_POST['Descripcion'].";".$_POST['Precio'];;
            fwrite($productos, "\n");
            fwrite($productos, $nuevoProducto);
            fclose($productos);
        }
    ?>
    <div id="Contenedor">
        <a href="Mostrar_nuevo_producto.php" id="enlace">Añadir</a>
        <a href="nou_producte.html" id="enlace">Atras</a>
    </div>
</body>
</html>
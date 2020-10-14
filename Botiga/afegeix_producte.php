
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $productos = fopen("productes.txt", "a");
            $nuevoProducto = $_POST['Nombre'].";".$_POST['Descripcion'].";".$_POST['Precio'];;
            fwrite($productos, "\n");
            fwrite($productos, $nuevoProducto);
            fclose($productos);
        }
    ?>
    <div id="Contenedor">
        <a href="productes.txt" id="enlace">Añadir</a>
        <a href="elimina_productes.php?Nombre={$producto->Nombre}" class="eliminar" data-id="'.$obj_kart->del_prod($producto->Nombre).'"><img id="img" src="img/papelera.jpg" alt="Papelera"> </a>
    </div>
</body>
</html>
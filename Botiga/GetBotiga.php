<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetBotiga</title>
    <link rel="stylesheet" href="CSS/Botiga.css">
</head>
<body>
    <div>
    <h1 id="Titulo">Introducir Productos</h1>
        <form action="PostBotiga.php" method="post">
            <div>
                <label for="Nombre">Nombre:</label>
                <input type="text" id="Nombre" name="Nombre">
            </div>
            <div class="form-group">
                <label for="Descripcion">Descripcion:</label>
                <textarea id="Descripcion" name="Descripcion"></textarea>
            </div>
            <div>
                <label for="Precio">Precio:</label>
                <input type="number" id="Precio" name="Precio">
            </div>
            <div>
            <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>
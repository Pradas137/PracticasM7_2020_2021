<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostBotiga</title>
    <link rel="stylesheet" href="CSS/Botiga.css">
</head>
<body>
    <h1>Producto Eliminado</h1>
    
<?php
while($variable = $consulta->fetch_assoc())
{
}
  ?>
  <tr>

<td><?php echo $variable['nombre']; ?></td>
<td><?php echo $variable['apellido']; ?></td>
<td><?php echo $variable['correo']; ?></td>
<td><?php echo $variable['contrasena']; ?></td>
<td>
  <form method="post" action="acciones.php">
       <input type="hidden" name="action" value="consultaeli">
       <input type="hidden" name="nombre" value="<?php echo $variable['nombre'];?>">             
      <input name="btneliminar" type="button" value="Eliminar" type="submit" class="btn btn-danger" />
  </form>

</td>
</tr>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/index.css">
    <title>Calendario</title>
</head>
<body>
    <table>
        <tr>
            <?php
               	$month=date("n");

			$year=date("Y");

			$diaActual=date("j");

			$diaSemana=date("w");

			$ultimoDiaMes= date("t");

			$dia=1;

			$dias=1;

			echo "<table border=1 width=80>";
			echo "<tr><th colspan=7> $month</th></tr>";

			echo "<tr> <td width=10>Lunes</td> <td width=42>Martes</td> <td width=42>Miercoles</td> <td width=42>Jueves</td> 
			<td width=42>Viernes</td> <td width=42>Sabado</td> <td width=42>Domingo</td></tr>";
            ?>
        </tr>
        <?php

        echo "<tr>";
        $primero = date("w", mktime(0, 0, 0, 1, 1, 2020));
        $contadorDias = 1;
        for ($counter = 0; $contador < $primero - 1; $contador++) { 
            echo "<td></td>";
            $contadorDias += 1;
        }
        for ($dias=1; $dias < 31; $dias++) {
            echo "<td>";
            echo "<div>$dias</div>";
            echo "<div><textarea width=20></textarea></div>";
            echo "</td>";
            if ($contadorDias % 7 == 0) {
                echo "</tr><tr>";
            }
            $contadorDias += 1;
        }
        ?>
    </table>
</body>
</html>
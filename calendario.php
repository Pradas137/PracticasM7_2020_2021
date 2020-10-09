<!DOCTYPE html>
<html>
<head>
    <title>Calendario</title>
    <style type="text/css">
        span.day { color: #f00; }
    </style>
    <?php

        $month=date("F");

        $year=date("Y");

        $diaActual=date("j");

        $diaSemana=date("w");

        $ultimoDiaMes= date("t");

        $dia=1;

        $dias=1;

        echo "<table border=1 width=294>";

        echo "<tr><th colspan=7> $month</th></tr>";

        echo "<tr> 
                <td width=42>Lunes</td> 
                <td width=42>Martes</td> 
                <td width=42>Miercoles</td> 
                <td width=42>Jueves</td> 
                <td width=42>Viernes</td>
                <td width=42>Sabado</td>
                <td width=42>Domingo</td>
            </tr>";

            for ($contadorSemana=0; $contadorSemana < 5 ; $contadorSemana++) { 
                echo "<tr></tr>";
                for ($contadorDia=0; $contadorDia< 7; $contadorDia++) {
                    if ($dias<$diaSemana || $dia>$ultimoDiaMes) {
                        echo "<td> </td>";
                    }else{
                        echo "<td>";
                        echo "<div>$dia</div>";
                        echo "<div></div>";
                        echo "</td>";
                        $dia+=1;
                    }
                $dias+=1;
                }
            }
    ?>

</head>
<body>

</body>
</html>
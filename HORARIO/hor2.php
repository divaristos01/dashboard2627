<?php
//VERSION 2

$horas = [1, 2, 3, 4, 5, 6, 7];

$colores = [
    "DWENC 2DAW" => "#FFE082",
    "IPE2 2DAW" => "#FFD1DC",
    "DWESV 2DAW" => "#AEC6CF",
    "PIMOD 2DAW" => "#B39DDB",
    "DEAPW 2DAW" => "#C5E1A5",
    "OPT2I 2DAW" => "#FFAB91",
    "OPT2A 2DAW" => "#FFAB91",
    "DASP 2DAW" => "#80CBC4",
    "SASP 2DAW" => "#80DEEA",
    "OPT 1 2DAW" => "#F48FB1",
    "TUTO 2DAW" => "#CE93D8",
    "" =>"#FFFFFF"
];

$horario = [
    "Lunes" => [
        1 => "IPE2 2DAW",
        2 => "DWESV 2DAW",
        3 => "DWESV 2DAW",
        4 => "PIMOD 2DAW",
        5 => "DEAPW 2DAW",
        6 => "DWENC 2DAW",
        7 => "DWENC 2DAW"
    ],
    "Martes" => [
        1 => "DWENC 2DAW",
        2 => "DWENC 2DAW",
        3 => "DWESV 2DAW",
        4 => "DWESV 2DAW",
        5 => "PIMOD 2DAW",
        6 => "DEAPW 2DAW",
        7 => ""
    ],
    "Miérc." => [
        1 => "IPE2 2DAW",
        2 => "DWENC 2DAW",
        3 => "DWENC 2DAW",
        4 => "DWESV 2DAW",
        5 => "DEAPW 2DAW",
        6 => "DEAPW 2DAW",
        7 => ""
    ],
    "Jueves" => [
        1 => "DWESV 2DAW",
        2 => "DWESV 2DAW",
        3 => "DWESV 2DAW",
        4 => "SASP 2DAW",
        5 => "OPT 1 2DAW",
        6 => "IPE2 2DAW",
        7 => ""
    ],
    "Viernes" => [
        1 => "OPT2I 2DAW",
        2 => "OPT2A 2DAW",
        3 => "DASP 2DAW",
        4 => "DWESV 2DAW",
        5 => "DWESV 2DAW",
        6 => "TUTO 2DAW",
        7 => ""
    ]
];
/* EN ESTE CASO, AL DECLARAR LOS ARRAYS, EN EL DE HORARIO, A CADA HORA DE CADA DÍA, LE DOY UN VALOR. ES DECIR, EN VEZ DE EMPEZARLO EN 0 HASTA EL ÍNDICE QUE SEA,
LO EMPIEZO DESDE 1, SE PUEDE OMITIR, PERO DE ESTA FORMA LO ENTIENDO MEJOR Y REUTILIZO EL ARRAY */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Horario</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <?php
            foreach ($horario as $dia => $asignaturas) {
                echo "<th>$dia</th>";
            }
            ?>
        </tr>

        <?php
        $total = count($horas);

        for($i=1;$i<=$total;$i++){
            echo "<tr>";
            echo "<td>$i</td>";

            foreach ($horario as $dia => $asignaturas) {
                $texto = $asignaturas[$i];                                          //TENGO LOS DOS FORMATOS, ESTE ES EL QUE ME HAS PEDIDO CON EL FOR

                $color = $colores[$texto];

                echo "<td style='background-color: $color;'>$texto</td>";
            }

            echo "</tr>";
        }
        /*foreach ($horas as $hora) {
            echo "<tr>";
            echo "<td>$hora</td>";

            foreach ($horario as $dia => $asignaturas) {
                $texto = $asignaturas[$hora];
                                                                                    EN ESTE FORMATO LO RECORRO CON FOREACH
                $color = $colores[$texto];

                echo "<td style='background-color: $color;'>$texto</td>";
            }

            echo "</tr>";
        }*/
        ?>
    </table>
</body>
</html>
<?php
//TENGO OTRA VERSIÓN EN LA QUE UTILIZO LOS ÍNDICES DE OTRA FORMA, EN ELLA ESTÁ EXPLICADO

$horas = ["8:15", "9:10", "10:05", "11:30", "12:25", "13:20", "14:15"];

$colores = [
    "DWENC 2DAW" => "#FFE082",
    "IPE2 2DAW" => "#FFD1DC",
    "DWESV 2DAW" => "#AEC6CF",
    "PIMOD 2DAW" => "#B39DDB",
    "DEAPW 2DAW" => "#C5E1A5",
    "OPT2I 2DAW" => "#FFAB91",
    "OPT2A 2DAW" => "#0000eb",
    "DASP 2DAW" => "#80CBC4",
    "SASP 2DAW" => "#80DEEA",
    "OPT 1 2DAW" => "#F48FB1",
    "TUTO 2DAW" => "#CE93D8",
    "" =>"#FFFFFF"
];

$horario = [
    "Lunes" => [
        "IPE2 2DAW",
        "DWESV 2DAW",
        "DWESV 2DAW",
        "PIMOD 2DAW",
        "DEAPW 2DAW",
        "DWENC 2DAW",
        "DWENC 2DAW"
    ],
    "Martes" => [
        "DWENC 2DAW",
        "DWENC 2DAW",
        "DWESV 2DAW",
        "DWESV 2DAW",
        "PIMOD 2DAW",
        "DEAPW 2DAW",
        ""
    ],
    "Miérc." => [
        "IPE2 2DAW",
        "DWENC 2DAW",
        "DWENC 2DAW",
        "DWESV 2DAW",
        "DEAPW 2DAW",
        "DEAPW 2DAW",
        ""
    ],
    "Jueves" => [
        "DWESV 2DAW",
        "DWESV 2DAW",
        "DWESV 2DAW",
        "SASP 2DAW",
        "OPT 1 2DAW",
        "IPE2 2DAW",
        ""
    ],
    "Viernes" => [
        "OPT2I 2DAW",
        "OPT2A 2DAW",
        "DASP 2DAW",
        "DWESV 2DAW",
        "DWESV 2DAW",
        "TUTO 2DAW",
        ""
    ]
];
/* EN ESTA VERSION HE ASIGNADO LAS HORAS Y HE ELIMINADO LOS ÍNDICES "FORZADOS"*/
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

        for($i=0;$i<$total;$i++){
            echo "<tr>";
            echo "<td>$horas[$i]</td>";

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
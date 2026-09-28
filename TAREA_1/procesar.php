<?php
    $numero= $_GET["numero"];
    $factoriales = array();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Factoriales</title>
</head>
<body>
    <h1>FACTORIALES</h1>
    <?php
        for ($i = 1; $i <= $numero; $i++) {
            $resultado = 1;
            for ($j = 1; $j <= $i; $j++) {
                $resultado = $resultado * $j;
            }
            $factoriales[$i]=$resultado;
        }
    ?>
    <table>
        <tr>
            <th>NUMERO</th>
            <th>FACTORIAL</th>
        </tr>
        <?php
            foreach ($factoriales as $i=>$resultado) {
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $resultado . '</td>
                      </tr>';
            }
        ?>
    </table>
</body>
</html>
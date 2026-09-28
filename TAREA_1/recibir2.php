<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="GET">
        <label>INTRODUCE UN NÚMERO:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit">
    </form>
</body>
</html>

<?php
    $numero= isset($_GET["numero"]);/*Con el isset le das prioridad a que se llene la variable*/
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
    <table>
        <tr>
            <th>NUMERO</th>
            <th>FACTORIAL</th>
        </tr>
        <?php
            for ($i = 1; $i <= $numero; $i++) {
                $resultado = 1;
                for ($j = 1; $j <= $i; $j++) {
                    $resultado = $resultado * $j;
                }
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $resultado . '</td>
                      </tr>';
            }
        ?>
    </table>
</body>
</html>
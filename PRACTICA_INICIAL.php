<?php
    $i=0;
    $j=0;
    $resultado=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>NUMERO</td>
            <td>FACTORIAL</td>
        </tr>
        <?php
            for($i=1;$i<11;$i++){
                $resultado=1;
                for($j=1;$j<=$i;$j++){
                    $resultado=$resultado*$j;
                }
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$resultado.'</td>
                      </tr>';
            }
        ?>

    </table>
</body>
</html>
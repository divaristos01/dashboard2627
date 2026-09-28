<?php
    //$asignaturas=$_GET["asignaturas"];
    $profesor=$_GET["profesor"];
    $horas=$_GET["horas"];
    $info=$_GET["info"];

    if(isset($_GET["asignaturas"])){
        foreach ($_GET["asignaturas"] as $asignatura) {
            echo "ASIGNATURA: " . $asignatura . "<br>";
        }
        }else{
            echo "NO HAY ELECCION";
    }

    echo "PROFESOR: " . $profesor . "<br>";
    echo "HORAS: " . $horas . "<br>";
    
    if(empty($info)){
        echo "NO HAY INFORMACION<br>";
    }else{
        echo "INFORMACIÓN: " . $info . "<br>";
    }
    
?>

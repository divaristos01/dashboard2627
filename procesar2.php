<?php
  //  $profesor=$_GET["profesor"];
    $asignaturas=$_GET["asignaturas"];
    $horas=$_GET["horas"];
    $info=$_GET["info"];

    echo "ASIGNATURA: " . $asignaturas . "<br>";
    if(isset($_GET["profesor"])){
        foreach ($_GET["profesor"] as $profesores) {
            echo "PROFESORES: " . $profesores . "<br>";
        }
    }else{
        echo "NINGUNO SELECCIONADO";
    }
    
    echo "HORAS: " . $horas . "<br>";
    
    if(empty($info)){
        echo "NO HAY INFORMACION<br>";
    }else{
        echo "INFORMACIÓN: " . $info . "<br>";
    }
    
?>

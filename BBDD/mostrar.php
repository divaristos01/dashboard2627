<?php
    require 'configdb.php';

    function conectar(){
        $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8"); 
        return $conexion;
    }

    $conexion=conectar();

    $sql = "SELECT * FROM asignatura";
    $resultado = $conexion->query($sql);
    $fila = $resultado->fetch_array();
    echo $fila['nombre'];
    echo "<br>";
    echo $fila['color'];
    $fila = $resultado->fetch_array();
    echo $fila['nombre'];
    echo "<br>";
    echo $fila['color'];

    $sqlContar = "SELECT COUNT(*) AS total FROM asignatura";
    $resultadoContar = $conexion->query($sqlContar);
    $fila = $resultadoContar->fetch_array();
    echo "<br><br><br>";
    echo $fila['total'];
?>
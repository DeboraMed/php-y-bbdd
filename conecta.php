<?php
    $servidor='localhost';
    $usuario='root';
    $clave= 'pestillo';

    //realizamos la conexión al servidor y se guarda los parametros en la variable conexion
    $conexion=mysqli_connect($servidor,$usuario,$clave,$db);
    if(mysqli_connect_errno()){
        echo 'No se ha podido establecer la conexión con la BBDD.</br>';
        die("Error: ".mysqli_connect_error());
    }
    //Consulta para configurar la codificación de caracteres
    mysqli_query($conexion,"SET NAMES 'utf8'");
?>

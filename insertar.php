<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once'conecta.php';
    $modelo=$_POST['modelo'];
    $marca=$_POST['marca'];
    $precio=(int)$_POST['precio'];
    $stock=(int)$_POST['stock'];

    $sql="insert into coche values(null,'$modelo','$marca','&precio','$stock')";
    $insert=mysqli_query($conexion,$sql);
    if($insert){
        echo 'Datos insertados correctamente';
    }else{
        echo 'Error' .mysqli_error($conexion);
    }
    mysqli_close($conexion);
    ?>

    <!-- voy por la pagina 10, ejercicios -->
</body>
</html>
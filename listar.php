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
    $sql='SELECT * FROM COCHE';
    $resultado=mysqli_query($conexion,$sql);
    if(mysqli_num_rows($resultado)> 0){ ?>
    <table style="border:solid 1px">
        <caption>
            Coches del concesionario
        </caption>
        <tbody>
            <tr><th> Identificador </th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>

            <?php while($fila=mysqli_fetch_assoc($resultado)){ ?>
            <tr><td><?=$fila['id']?></td>
                <td><?=$fila['marca']?></td>
                <td><?=$fila['modelo']?></td>
                <td><?=$fila['precio']?></td>
                <td><?=$fila['stock']?></td>
            </tr>
            <?php
            }
            }else{
                echo '0 Registros';}
                mysqli_close($conexion);
            ?>
        </tbody>
    </table>  
</body>
</html>
<?php

include_once 'conex.php';

$sql = "SELECT * FROM contacto";
$result = mysqli_query($conex, $sql);
$rows = mysqli_num_rows($result);



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar contactos</title>
</head>

<body>
    <br>
    <center>
        <h1> Administrar contactos</h1>
        <hr>
        <table border="1">
            <tr>
                <th> Id </th>
                <th> Nombre </th>
                <th> Direccion </th>
                <th> Email </th>
                <th> Telefono </th>
                <th> celular </th>
                <th> Whatsapp </th>
                <th> Acciones </th>
            </tr>
            <tr>
                <?php while ($fila = mysqli_fetch_assoc($result))  { ?>
                <td> <?php echo $fila['id_contacto'] ?> </td>
                <td> <?php echo $fila['nombre_suc'] ?> </td>
                <td> <?php echo $fila['direccion'] ?> </td>
                <td> <?php echo $fila['email'] ?> </td>
                <td> <?php echo $fila['tel'] ?> </td>
                <td> <?php echo $fila['cel'] ?> </td>
                <td> <?php echo $fila['whatsapp'] ?> </td>
                <td>  <a href="actualizar.php <?php echo $fila['id_contacto'] ?>">Actualizar </a>  </td>
            </tr>
          <?php } ?>
        </table>
        <hr>
        <h2>Numero de registros <?php echo 'Número de total de registros: ' . $fila['total'];
        
 ?>     ($result);
 </h2> 
    </center>
</body>

</html>
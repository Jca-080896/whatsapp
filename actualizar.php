<?php

include_once 'conex.php';

if (isset ($_GET['id']))
{
      $id = $_GET('id');
      $sql = "Select * from contacto where id_contacto = $'id'";
      $resultado = mysqli_query($con,$sql);

      if ($fila = mysqli_fetch_assoc($resultado))
{

}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   $id=$_POST['id'];
   $nombre=$_POST['nombre'];
   $direccion=$_POST['direccion'];
   $email=$_POST['email'];
   $tel=$_POST['tel'];
   $cel=$_POST['cel'];
   $whatsapp=$_POST['whatsapp'];

   $sql="update contacto set nombre_suc='$nombre', direccion='$direccion', email='$email', tel='$tel', cel='$cel', whatsapp='$whatsapp' where id_contacto='$id'";


   $resultado=mysqli_query($con,$sql);


   if ($resultado)
   {
      echo "<script>
              alert('¡Contacto Actualizado con éxito!');
              location.href='administrar.php';
            </script>";
   }
   else
   {
      echo "<script>
                alert('No fue posible actualizar correctamente, intentelo de nuevo ...');
                location.href='administrar.php';
            </script>";
   }

}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Actualizar contacto</title>
</head>
<body>
      <br>
      <h3> <a href="administrar.php"> contactos  administar</a></h3>
      <hr>
      <center>

      <h1> Actualizar Contactos</h1>
      <hr>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
            <table border="1">
                  <tr>
                        <td><label for="monbre">Nombre</label></td>
                        <td> <input type="text" name="nombre" value=" <?php echo ($_SERVER["PHP_SELF"]);?> " required></td>
                  </tr>
                  <tr>
                         <td><label for="direccion">Direccion</label></td>
                         <td> <input type="text" name="direccion" value=" " required></td>
                  </tr>
                  <tr>
                         <td><label for="email">E-mail</label></td>
                         <td> <input type="email" name="email" value=" " required></td>
                  </tr>
                  <tr>
                         <td><label for="tel">Telefono</label></td>
                         <td> <input type="tel" name="tel" value=" " required></td>
                  </tr>
                  <tr>
                        <td><label for="cel">celular</label></td>
                         <td> <input type="tel" name="cel" value=" " required></td>
                  </tr>
                  <tr>
                         <td><label for="whatsapp">Whatsapp: </label></td>
                         <td> <input type="tel" name="whatsapp" value=" " required></td>
                  </tr>
            </table>
            
      </form>

      </center>
</body>
</html>
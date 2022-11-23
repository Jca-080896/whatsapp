<?php
$con = new mysqli('127.0.0.1', 'root','','contactos');

if ($con)
      echo "conexion exitosa";

else
      echo "Conexion no exitosa";

?>

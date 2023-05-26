<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>borrado de rubro</title>
</head>

<body>

  <?php
session_status(); //abre la sesion de la BD

$server='localhost'; //Variable nombre del servidor
$user='root'; //Variable nombre de usuario
$password='';//Variable contenido contraseña
$basedatos='ingreso';//Variable nombre de la BD

$conexion=mysqli_connect($server,$user,$password,$basedatos); //permite crear una conexion al servidor MySQL

if (isset($conexion)){
        echo 'Conexion exitosa'; //mensaje que se muestra
}

// Recibimos los datos del formulario
$nombre = $_POST["nombre"];

//Creamos la sentencia SQL
$ssql = "delete from ventas where nombre='$nombre'";

// Ejecutamos la sentencia de borrado
if($conexion->query($ssql)) {
  echo '<p>Contacto borrado con éxito</p>';
} else {
  echo '<p>Hubo un error al borrar el contaco: ' . $conexion->error . '</p>';
}
   ?>
</body>

</html>
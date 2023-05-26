<?php include('conexion_bd.php')?>   <!--permite la conexion con la bd-->     
<!DOCTYPE html>   <!--Elemento raiz html-->     
<html lang="en">
                        
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilostable2.css">  <!--adquiere las configuraciones de estilos.css-->
    <title>PUPI</title>
</head>

<body>
  
<form method="POST" action="pagina2.php">
    Nombre<br>
    <?php
      //Creamos la sentencia SQL y la ejecutamos
      $ssql="select nombre from ventas order by nombre";
      $result = $conexion->query($ssql);
    
      echo '<select name="nombre">';
      //Mostramos los registros en forma de menú desplegable
      while ($row = $result->fetch_array()) {
        echo '<option>'.$row["nombre"];
      }
      $result->free_result();
    ?>
    </select>
    <br>
    <input TYPE="submit" value="Borrar">
</form>


</body>

</html>
<?php
include("conexion_bd.php"); //indica una conexion con el archivo

if (isset($_POST['datos'])) {
    $nombre=$_POST['nombre']; //indica las columnas de nuestra BD
    $id=$_POST['id'];
    $celular=$_POST['celular'];
    $producto=$_POST['producto'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    $direccion=$_POST['direccion'];
    $metodo_pago=$_POST['metodo_pago'];
    echo"guardando1"; //mensaje que se muestra
    $query ="INSERT INTO ventas (nombre,id,celular,producto,cantidad,precio,direccion,metodo_pago) VALUES ('$nombre','$id','$celular','$producto','$cantidad','$precio','$direccion','$metodo_pago')"; //indica el modo en el que se realizaran los registros
    
    $result = mysqli_query ($conexion,$query); //permite ejecutar una consulta 
    if (!$result){
        die(" Query failed ");
        }
    
        
        echo"guardando"; //mensaje que se muestra
        header("location:ingreso.php"); //para redirigir a otra pagina




}

?> 
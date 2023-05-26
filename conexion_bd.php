<?php //abre la sesion php
session_status(); //abre la sesion de la BD

$server='localhost'; //Variable nombre del servidor
$user='root'; //Variable nombre de usuario
$password='';//Variable contenido contraseña
$basedatos='ingreso';//Variable nombre de la BD

$conexion=mysqli_connect($server,$user,$password,$basedatos); //permite crear una conexion al servidor MySQL

if (isset($conexion)){
        echo 'Conexion exitosa'; //mensaje que se muestra
}
?> <!--cierra la sesion php-->
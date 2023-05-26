<?php include('conexion_bd.php')?>   <!--permite la conexion con la bd-->     
<!DOCTYPE html>   <!--Elemento raiz html-->     
<html lang="en">
                        
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilostable3.css">  <!--adquiere las configuraciones de estilos.css-->
    <title>PUPI</title>
</head>

<body>
    <div class="div">
        <header class="header">
            <p>
            <h1>PUPI CAKE SHOP</h1>
            </p>
        </header>
        <nav class="nav">
            <ul class="menu">
                <p>
                <h1 class="menus"> MENÚ</h1>
                </p>
                <a class="uno" href="index.html">Inicio</a><!-- botones y direcciona los botones hacia las paginas-->
                <a class="dos" href="ingreso.php">Ingreso</a>
                <a class="tres" href="#">Mostrar</a>
                <a class="cuatro" href="#">Actualizar</a>
                <a class="cinco" href="eliminar.php">Eliminar</a>
               
            </ul>

        </nav>
        <section class="section">
            <TABLE class="caption"> <!--Crear una tabla-->
               
                    <thead>
                            <th colspan="5">TABLA</th>
                    </thead>
                    <thead>
                    <tr>
                        <th>nombre</th> <!--campos que apareceran en la tabla-->
                        <th>id</th>
                        <th>celular</th>
                        <th>producto</th>
                        <th>cantidad</th>
                        <th>precio</th>
                        <th>direccion</th>
                        <th>metodo de pago</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query ="SELECT * FROM ventas"; //genera una busqueda por todos los campos creados en la bd
                    $result_clientes =mysqli_query($conexion,$query);
                    while($row =mysqli_fetch_array($result_clientes)){ ?>
                    <tr> <!--tr crea una fila-->
                        <!--muestra los registros en una linea o fila segun los titulos en el orden de salida-->
                        <th> <?php echo $row['nombre'] ?></th> <!--define una celda como encabezado de un grupo de celdas en una tabla-->
                        <td> <?php echo $row['id'] ?></td>
                        <td> <?php echo $row['celular'] ?></td>
                        <td> <?php echo $row['producto'] ?></td>
                        <td> <?php echo $row['cantidad'] ?></td><!--td crea una columna-->
                        <td> <?php echo $row['precio'] ?></td>
                        <td> <?php echo $row['direccion'] ?></td>
                        <td> <?php echo $row['metodo_pago'] ?></td>
                    </tr>
                    <?php }?>
                    </tbody>
                    
            </TABLE>


        </section>

        <aside class="columnaphp3">
            <article class="article2php3">
                <h1>FORMULARIO</h1>
                <form class="form2" action="datos.php" method="post"> <!--inicio formulario-->
                   
                    <input class="inputuno" type="text" name="nombre" placeholder="Ingresa tu nombre"> <!--tipo de texto que se ingresa en el formulario y el mensaje que aparecera en cada espacio del formulario-->
                    <input class="inputuno" type="text" name="id" placeholder="Ingresa tu identificacion"> 
                    <input class="inputuno" type="number" name="celular" placeholder="Celular"> 
                    <input class="inputuno" type="text" name="producto" placeholder="Producto"> 
                    <input class="inputdos"type="number" name="cantidad" placeholder="Cantidad deseada">
                    <input class="inputtres"type="number" name="precio" placeholder="Precio del producto">
                    <input class="inputuno" type="text" name="direccion" placeholder="Ingresa tu direccion"> 
                    <input class="inputuno" type="text" name="metodo_pago" placeholder="Metodo de pago"> 
                    <input  type="submit" class="btn btn-success btn-block" name="datos" value="Enviar registro">
                    
                    
                    
                    
                    <p>Gracias por tu compra</p>
                </form> <!--fin formulario-->
                
                
            </article>
        </aside>
        <footer class="pie"> <!--final de la pagina-->
            <ul>
                <a class="atrasmostrar" href="ingreso.php">Atras</a> <!--boton final y direccionamiento de este-->
            </ul>

        </footer>
    </div>
</body>

</html>
<?php include('conexion_bd.php')?>   <!--permite la conexion con la bd-->  
<!DOCTYPE html>   <!--Elemento raiz html-->     
<html lang="en">
                        
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"> <!--adquiere las configuraciones de estilos.css-->
    <title>PUPI</title> 
</head>

<body>
    <div class="div">
        <header class="header">
            <p>
            <h1>PUPI CAKE SHOP</h1> <!--titulo de la pagina-->
            </p>
        </header>
        <nav class="nav">
            <ul class="menu">  <!--ul es una lista no ordenada-->
                <p>
                <h1 class="menus"> MENÚ</h1>
                </p>
                <a class="uno" href="index.html">Inicio</a> <!-- direcciona los botones hacia las páginas-->
                <a class="dos" href="#">Ingreso</a>
                <a class="tres" href="mostrar.php">Mostrar</a>
                <a class="cuatro" href="#">Actualizar</a>
                <a class="cinco" href="#">Eliminar</a>
               
            </ul>

        </nav>
        <section class="section">
            <article class="article1"> <!--crea un articulo, una parte del texto de la pagina-->
                <h1>¡Gracias por preferirnos!</h1>
                <p>Si deseas adquirir uno de nuestros productos, ingresa tus datos en el formulario</p> <!--p es un parrafo diferente-->
                
                    

            </article>


        </section>

        <aside class="columnaphp">
            <article class="article2php">
                <h1>PIDA AQUI</h1>
                <form class="form" action="datos.php" method="post"> <!--inicio formulario-->
                    <h2> Formulario</h2>
                    
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
                </form> <!--final del formulario-->
                
                
            </article>
        </aside>
        <footer class="pie">  <!--final de la pagina-->
            <ul>
                <a class="atras" href="index.html">Atras</a> <!--boton final y direccionamiento de este-->
            </ul>

        </footer>
    </div>
</body>

</html>
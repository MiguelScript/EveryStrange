<?php session_start();?>
<?php include_once('db/conexion_base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> :v </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/plantilla.css">
    <script src = "js/eltruco.js"></script>

</head>

<body class="body">

<header> 

<a id="logo" href="index.php"> Everything is Strange </a>  
  <nav> 
     <ul> 
         <li id="contenedor-menu">  <i class="fa fa-camera-retro fa-lg"> </i> Menu </li> </a>       
      </ul>  

   </nav> 
 
</header>

                                   <!--  INICIO ASIDE OCULTO -->
<aside id="aside">

 <?php  
               /*INICIO SI ESTA REGISTRADO, FOTO DEL USUARIO. SI NO FOTO GENERICA, REGISTRATE O INGRESA*/

 if(isset($_SESSION['usuario_nombre'])) 

        { ?>

                <div> <img src= "<?php echo $_SESSION['usuario_imagen'] ?> "> </div>
                <p class="item"> <?php echo $_SESSION['usuario_nombre'] ?> </p>
                 <a class="item" href="perfil.php"> Mi perfil </a> 
                 <a class="item" href="mispublicaciones.php"> Mis publicaciones </a> 
                 <br><br><br><br><br><br><br><br>
                 <a class="item" href="salir.php"> Cerrar sesion </a>
              
<?php 
              
        } 

    else 

        { ?>

                <div> <img src= imagenes/perfil/noperfil.jpg > </div>
                <a class="item" href="registro.php"> Registrate </a>
                <a class="item" href="ingreso.php"> Ingresar </a>
<?php   } 

              /*FIN SI ESTA REGISTRADO, FOTO DEL USUARIO. SI NO FOTO GENERICA, REGISTRATE O INGRESA*/
?> 

 </aside>

                                      <!-- FINAL ASIDE OCULTO -->


<section class="area-principal"> 
 
 <h1>  <?php echo "Cerrando sesion"; ?> </h1>

 <div class="contenido"> 
<?php 

session_destroy();

    
    echo '<meta http-equiv="refresh" content="1; url=index.php" />'; ?>


 </div>

   </section>     

<div id="div-oculto">  </div>

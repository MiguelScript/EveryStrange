<?php session_start();?>
<?php include_once('db/conexion_base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> :v </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
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
                <a class="item" href="index.php"> Inicio </a>
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


           <!--  INICIO DIV OCULTO -->

<div id="div-oculto">  </div>

           <!--  FINAL DIV OCULTO -->

                      
                       <!--  INICIO IMAGEN PRINCIPAL -->

<div id="imagen-principal"> <img src="imagenes/pagina/5603710-max-life-is-strange-wallpaper.jpg"> </div>


                        <!--  FINAL IMAGEN PRINCIPAL -->


 <!--  INICIO AREA DE ICONOS -->

<section class="area-iconos"> 
  <div class="contenedor-iconos"> 


     <div class="icono-principal">
     <a class="salvacion" href="publicacion.php"> <span class="salvacion">

         <img class="imagen-icono" src="imagenes/pagina/9E7.jpg" > 
         </span>  <h3 class="texto">  Todas las Publicaciones </h3> </a>
         
     </div>


     <div class="icono-principal">
     <a class="salvacion" href="usuarios.php"> <span class="salvacion">

         <img class="imagen-icono" src="imagenes/pagina/fab70679ccb383fb32f50458b077ec391b5d2dc2.jpg" > 
         </span>  <h3 class="texto">  Ususarios registrados </h3> </a>
         
     </div>


     <div class="icono-principal">
     <a class="salvacion" href="galeria.php"> <span class="salvacion">

         <img class="imagen-icono" src="imagenes/pagina/642030.jpg" > 
         </span>  <h3 class="texto">  Imagenes publicadas </h3> </a>
         
     </div>
   </section>     

<!--  FINAL AREA DE ICONOS -->


<div class="noticias">
<h1> Diseñado por Miguel Acosta </h1>
</div>


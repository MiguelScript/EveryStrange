<?php session_start();?>
<?php include_once('db/conexion_base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> :v </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/plantilla.css">
    <link rel="stylesheet" type="text/css" href="css/galeria.css">
    <script src = "js/eltruco.js"></script>
    <script> function advertir () 
    { alert("Debes registrarte para poder publicar"); 
    } </script>

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

 <a class="item" href="index.php"> Inicio </a>
 <a class="item" href="perfil.php"> Mi perfil </a> 
 <a class="item" href="mispublicaciones.php"> Mis publicaciones </a> 
 <br><br><br><br><br><br><br><br>

                  <!-- INCIO SI ESTA REGISTRADO, OPCION A SALIR -->
 
 <?php if(isset($_SESSION['usuario_nombre'])) { ?> <a class="item" href="salir.php"> Cerrar sesion </a>  <?php } ?>

                  <!-- FINAL SI ESTA REGISTRADO, OPCION A SALIR -->
 </aside>

 <div id="div-oculto">  </div>





<section > 
 
 
 <h1>  Galeria  </h1>

 <?php


         $consulta = "SELECT publicacion.publicacion_imagen, publicacion.publicacion_titulo, publicacion.publicacion_fecha FROM publicacion";
        
        $publicaciones = $conexion->query($consulta);

        foreach ($publicaciones as $publicacion) {

          

    ?>

<div class="contenedor"> 

 <h3 class="tituloee"> <?= $publicacion['publicacion_titulo'] ?> </h2> 
 <h6> <?= $publicacion['publicacion_fecha'] ?> </h4>

 <div class="publicacion-imagen"> <img src= <?= $publicacion['publicacion_imagen'] ?> >  </div>
 
 
   
   <br>  
   

  
 </article>



<?php } ?>




<!--  INICIO AREA DE ICONOS -->

  <div class="area-iconos">


<h1> Otras secciones </h1>
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
      

<!--  FINAL AREA DE ICONOS -->
    </section> 




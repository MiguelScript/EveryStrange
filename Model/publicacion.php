<?php session_start();?>
<?php include_once('db/conexion_base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> :v </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/plantilla.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
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

 <a id="boton" <?php if(isset($_SESSION['usuario_nombre'])) { ?> href="publicar.php"> Publicar </a> 
 <?php } 

 else { ?> href="registro.php" onClick="advertir()"> Publicar </a> <?php } ?>




<section > 
 
 
 <h1>  Publicaciones </h1>

 <?php

         $consulta = "SELECT * FROM publicacion INNER JOIN usuario where usuario.usuario_id = publicacion.publicacion_usuario";
        
        $publicaciones = $conexion->query($consulta);

        foreach ($publicaciones as $publicacion) {

          $megusta = "SELECT * FROM megusta WHERE megusta_publicacion = '$publicacion[publicacion_id]'";

                $me_gusta_todos = $conexion->query($megusta);
                $contador = 0;
                foreach ($me_gusta_todos as $me_gusta) 

                {
                    $contador++;

                }
        

    ?>

<div class="contenedor"> 

<article class="articulos">
 <div id="imagen-usuario"> <img src= <?= $publicacion['usuario_imagen'] ?> >  </div>
 <div id="publicacion-imagen"> <img src= <?= $publicacion['publicacion_imagen'] ?> >  </div>
 
 


   <h4> <?= $publicacion['usuario_nombre']. ' ' .$publicacion['usuario_apellido']?> </h3>
   <h6> <?= $publicacion['publicacion_fecha'] ?> </h4>
   <br>  
   <h3> <?= $publicacion['publicacion_titulo'] ?> </h2> 
 <div class="div">  <p> <?= $publicacion['publicacion_texto'] ?></p> </div>
   
   <div id="megusta"> <h5 class="enlaces"> <a href="megusta.php?id=<?= $publicacion['publicacion_id'] ?> ">  Me gusta <?= $contador ?> </a> </h5>  </div> 

  
 </article>

    <div id = "caja-comentar"> 


   <form action="procesar_comentar.php?id=<?= $publicacion['publicacion_id'] ?>" method="POST" > 


   <textarea name="comentario" placeholder="Escribe tu comentario"></textarea> 

   <input type="submit" name="comentar">

  </form> </div>

  <div id="comentarios"> <?php $comentario_lista = "SELECT usuario.usuario_nombre, usuario.usuario_imagen, comentario.comentario_contenido, comentario.comentario_fecha FROM usuario INNER JOIN  comentario WHERE comentario.comentario_publicacion = '$publicacion[publicacion_id]' AND  comentario.comentario_usuario = usuario.usuario_id;";




    $comentarios = $conexion->query($comentario_lista); 

    foreach ($comentarios as $comentario) {
   


    ?>

   <div class="apartado"> 
   <div class="comentario-imagen-usuario"> <img src= <?= $comentario['usuario_imagen'] ?> >  </div>
   <p class="comenatario-persona"> <?= $comentario['usuario_nombre'] ?> </p> 
   <p class="coemtario-contenido"> <?= $comentario['comentario_contenido'] ?>
   <p class="coementario-fecha"> <h6> <?= $comentario['comentario_fecha'] ?> </h6> 
   </div>

   <?php } ?> </div>

  </div>


<?php } ?>




<!--  INICIO AREA DE ICONOS -->

  <div class="area-iconos">


<h1> Otras secciones</h1>
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



<div id="div-oculto">  </div>
   

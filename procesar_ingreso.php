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
 
 <h1>  Verificando </h1>

 <div class="contenido"> 

<?php

   

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $ingreso_datos = "SELECT * FROM usuario WHERE usuario_correo = '$correo' and usuario_clave ='$clave'";

    $verificar = $conexion->query($ingreso_datos);


    if($verificar->num_rows > 0) {

        foreach ($verificar as $usuario) {

            $id = $usuario['usuario_id'];
            $nombre = $usuario['usuario_nombre'];
            $apellido = $usuario['usuario_apellido'];
            $imagen = $usuario['usuario_imagen'];

        }
            $_SESSION['usuario_id'] = $id;
            $_SESSION['usuario_nombre'] = $nombre.' '.$apellido;
            $_SESSION['usuario_imagen'] = $imagen;

            echo '<meta http-equiv="refresh" content="0; url=index.php" />';

    } else {

        echo "Datos incorrectos";

        echo '<meta http-equiv="refresh" content="2; url=ingreso.php" />';
        




    }  ?>


 </div>

 

<div id="div-oculto">  </div>
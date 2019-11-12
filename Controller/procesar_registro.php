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

<?php 




    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $target_path = "imagenes/perfil/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}

$s="SELECT usuario_correo FROM usuario where usuario_correo = '$correo'";
$clavecita=$conexion->query($s);
$contador=0;
if($clavecita->num_rows > 0){
            $contador=1;
    }
    else {

    $registar = "INSERT INTO usuario(usuario_id, usuario_nombre, usuario_apellido, usuario_correo, usuario_clave , usuario_imagen) 
        VALUES ('','$nombre','$apellido','$correo','$clave', '$target_path')";

    $conexion->query($registar);

$ver_id = "SELECT usuario_id FROM usuario WHERE usuario_correo = '$correo' ";

    $id= $conexion->query($ver_id);

    foreach ($id as $identificador) 

    {
        
    

    $iden = $identificador['usuario_id'];
     
      
    }

$_SESSION['usuario_nombre'] = $nombre.' '.$apellido; 
$_SESSION['usuario_imagen'] = $target_path;
$_SESSION['usuario_id'] = $iden;
 

   } ?>
 
 <h1>  <?php if ($contador ==1) {
    echo "Este usuario ya se registro";
echo '<meta http-equiv="refresh" content="1; url=registro.php" />';

     }
else { echo "Te registraste correctamente"; 
echo '<meta http-equiv="refresh" content="1; url=index.php" />';
}?>
 </h1>

 <div class="contenido"> 



 </div>



   </section>     

<div id="div-oculto">  </div>

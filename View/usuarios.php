<!DOCTYPE html>
<html>
<head>
    <title> :v </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/plantilla.css">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">

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

<section class="area-principal"> 
 
 <h1>  Usuarios registrados </h1>

 <div class="contenido">

  <div class="tabla"> 

    <table>
        


        <tr class="celda-oscura">
            
            
            <td><p> Nombre  </p></td>
            <td><p> Apellido  </p> </td>
            <td><p> Correo  </p> </td>
            <td><p> Rol </p> </td>
        </tr>
            
        <tr class="celda-clara">
            <td><?= $usuario['usuario_nombre'] ?></td>
            <td><?= $usuario['usuario_apellido'] ?></td>
            <td><?= $usuario['usuario_correo'] ?></td>
            <td><?= $usuario['usuario_rol'] ?> </td>
        </tr>

       

    </table>
        
    </div>

 </div>
 </section> 


<?php 

       $consulta = "SELECT * FROM publicacion INNER JOIN usuario where usuario.usuario_id = publicacion.publicacion_usuario";
        
        $publicaciones = $conexion->query($consulta);

        foreach ($publicaciones as $publicacion) {
            
            $megusta = "SELECT * FROM megusta WHERE megusta_publicacion = '$publicacion[publicacion_id]'";

                $me_gusta_todos = $conexion->query($megusta);
                $contador = 0;
                foreach ($me_gusta_todos as $me_gusta) {
                    $contador++;

                }
        

    ?>

     <article>
     <div class="contenedor"> 

<article class="articulos">
 <div id="imagen-usuario"> <img src= <?= $publicacion['usuario_imagen'] ?> >  </div>
 <div id="publicacion-imagen"> <img src= <?= $publicacion['publicacion_imagen'] ?> >  </div>
        <h4> <?= $publicacion['usuario_nombre'] ?> </h3>
   <h6> <?= $publicacion['publicacion_fecha'] ?> </h4>  
   <h3> <?= $publicacion['publicacion_titulo'] ?> </h2> 
   <h4 id="final"> <?= $publicacion['publicacion_texto'] ?></h4>
   <div id="megusta"> <h5 class="enlaces"> <a href="megusta.php?id=<?= $publicacion['publicacion_id'] ?> ">  Me gusta <?= $contador ?> </a> </h5>  </div> 

   <?php $comentario_lista = "SELECT usuario.usuario_nombre, comentario.comentario_contenido, comentario.comentario_fecha FROM comentario INNER JOIN usuario WHERE comentario_publicacion = '$publicacion[publicacion_id]'";

    $comentarios = $conexion->query($comentario_lista); 

    foreach ($comentarios as $comentario) {
   


    ?>

   <div> <p> <?= $comentario['usuario_nombre'] ?> </p> 
         <p> <?= $comentario['comentario_contenido'] ?>
         <p> <?= $comentario['comentario_fecha'] ?>
   </div>

   <?php } ?>

   <div id = "caja-comentar"> 

   <form action="procesar_comentar.php?id=<?= $publicacion['publicacion_id'] ?>" method="POST" > 

   <textarea name="comentario" placeholder="Escribe tu comentario"></textarea> 


   <input type="submit" name="comentar"> </form> </div>
   <?php }?>
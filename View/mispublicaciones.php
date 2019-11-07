<section > 
 
 
 <h1>  Publicaciones  </h1>



<div class="contenedor"> 

<article class="articulos">
 <div id="imagen-usuario"> <img src= <?= // $publicacion['usuario_imagen'] ?> >  </div>
 <div id="publicacion-imagen"> <img src= <?= // $publicacion['publicacion_imagen'] ?> >  </div>
 
 


   <h4> <?= //$publicacion['usuario_nombre'] ?> </h3>
   <h6> <?= //$publicacion['publicacion_fecha'] ?> </h4>
   <br>  
   <h3> <?= //$publicacion['publicacion_titulo'] ?> </h2> 
 <div class="div">  <p> <?= //$publicacion['publicacion_texto'] ?></p> </div>
   
   <div id="megusta"> <h5 class="enlaces"> <a href="megusta.php?id=<?= $publicacion['publicacion_id'] ?> ">  Me gusta <?=// $contador ?> </a> </h5>  </div> 

  
 </article>

    <div id = "caja-comentar"> 


   <form action="procesar_comentar.php?id=<?= $publicacion['publicacion_id'] ?>" method="POST" > 


   <textarea name="comentario" placeholder="Escribe tu comentario"></textarea> 

   <input type="submit" name="comentar">

  </form> </div>



  <div class="apartado"> 
   <div class="comentario-imagen-usuario"> <img src= <?= //$comentario['usuario_imagen'] ?> >  </div>
   <p class="comenatario-persona"> <?= //$comentario['usuario_nombre'] ?> </p> 
   <p class="coemtario-contenido"> <?= //$comentario['comentario_contenido'] ?>
   <p class="coementario-fecha"> <h6> <?= //$comentario['comentario_fecha'] ?> </h6> 
   </div>

    </div>

  </div>

</section> 




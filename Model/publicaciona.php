<?php

public function publicacion_todas()
{
  $consulta = "SELECT * FROM publicacion INNER JOIN usuario where 
         usuario.usuario_id = publicacion.publicacion_usuario";
  $publicaciones = $conexion->query($consulta);
}

public function create($data)
{
	$publicacion = "INSERT INTO publicacion (publicacion_id, publicacion_usuario, publicacion_titulo, publicacion_texto, publicacion_imagen) 
        VALUES ('','$usuario_id','$titulo','$contenido' , '$target_path')";
	$conexion->query($publicacion);
}
  
public function publicaciones_gustadas($id)
{
  $consulta = "SELECT * FROM megusta INNER JOIN publicacion where megusta.megusta_usuario = '$id' and publicacion.publicacion_id = '$id' ";
  $publicaciones = $conexion->query($consulta);
}

        
    $comentario_lista = "SELECT usuario.usuario_nombre, usuario.usuario_imagen, comentario.comentario_contenido, comentario.comentario_fecha FROM usuario INNER JOIN  comentario WHERE comentario.comentario_publicacion = '$publicacion[publicacion_id]' AND  comentario.comentario_usuario = usuario.usuario_id;"
   


    ?>
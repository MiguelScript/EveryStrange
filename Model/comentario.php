<?php 

public function create($data)
{
	$s = "INSERT INTO comentario (`comentario_id`, `comentario_usuario`, `comentario_publicacion`, `comentario_contenido`)   VALUES  (' ', '$_SESSION[usuario_id]' , ' $publicacion_id ' , '$contenido' )";

	$conexion->query($s);
}


 ?>
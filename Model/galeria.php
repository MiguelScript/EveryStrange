<?php






public function galeria()
{
	$consulta = "SELECT publicacion.publicacion_imagen, publicacion.publicacion_titulo, publicacion.publicacion_fecha FROM publicacion";
    
    $publicaciones = $conexion->query($consulta);
}


?>
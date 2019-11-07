<?php 

	public function todos()
	{
		$sql = "SELECT * FROM usuario";
		$usuarios = $conexion->query($sql); 
	}
	public function publicaciones_user($id)
	{
		$consulta = "SELECT * FROM publicacion INNER JOIN usuario where publicacion.publicacion_usuario = '$id' and usuario.usuario_imagen = '$imagen' ";
    	$publicaciones = $conexion->query($consulta);

        foreach ($publicaciones as $publicacion) {

          $megusta = "SELECT * FROM megusta WHERE megusta_publicacion = '$publicacion[publicacion_id]'";

                $me_gusta_todos = $conexion->query($megusta);
                $contador = 0;
                foreach ($me_gusta_todos as $me_gusta) 

                {
                    $contador++;

                }
	}

	public function salir($id)
	{
		session_destroy();
	}

?>
<?php 

/**
 * 
 */
class Usuario 
{
	
	function __construct(argument)
	{
		# code...
	}

	public function show($id)
	{
		$s="SELECT usuario_correo FROM usuario where usuario_correo = '$correo'";
		$clavecita=$conexion->query($s);
	}

	public function store()
	{
		$registar = "INSERT INTO usuario(usuario_id, usuario_nombre, usuario_apellido, usuario_correo, usuario_clave , usuario_imagen) 
        VALUES ('','$nombre','$apellido','$correo','$clave', '$target_path')";

    $conexion->query($registar);
	}

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
}
	

?>
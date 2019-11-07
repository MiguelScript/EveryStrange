<?php

	public function get($id)
	{
		 	$consulta = "SELECT * FROM usuario WHERE usuario_id = '$id' ";
    		$user = $conexion->query($consulta);
	}


?>
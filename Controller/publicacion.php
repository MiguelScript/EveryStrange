 <?php

	$id = $_SESSION['usuario_id'];
 	$imagen = $_SESSION['usuario_imagen'];
 	$nombre = $_SESSION['usuario_nombre'];
	
	public function create($data)
	{
		$titulo = $_POST['titulo'];
    	$contenido = $_POST['contenido'];
    	$usuario_id = $_SESSION['usuario_id'];
     	$target_path = "imagenes/publicaciones/";
    	$target_path = $target_path . basename($_FILES['uploadedfile']['name']); 

    	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 

    		echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";

    		
		} else{
				
			echo "Ha ocurrido un error, trate de nuevo!"; 
		}


	}
 	public function publicacion_gustadas()
	{
        	
	}

?>
<?php

public function create(data)
{
    $s = "INSERT INTO megusta (megusta_id, megusta_usuario, megusta_publicacion) 
                    VALUES ('','$_SESSION[usuario_id]','$publicacion_id')";
    $conexion->query($s);
}
   
     $verificar_megusta = "SELECT * FROM megusta WHERE megusta_publicacion = '$publicacion_id' and megusta_usuario = $_SESSION[usuario_id]";

       $megusta = $conexion->query($verificar_megusta);
             
        if($megusta->num_rows > 0) {
        } else { }
        

                

?>
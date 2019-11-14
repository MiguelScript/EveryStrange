<?php  

namespace app/user

    
public function validar_registro(data)
{
    $user = app\model\usuario::show(data);
    if(isset($user)){

        echo "Ya estas registrado";
    }
    else{
        $registrar= app\model\usuario::store(data);
        
    }
}
    

$ver_id = "SELECT usuario_id FROM usuario WHERE usuario_correo = '$correo' ";

    $id= $conexion->query($ver_id);

    foreach ($id as $identificador) 

    {
        
    

    $iden = $identificador['usuario_id'];
     
      
    }

$_SESSION['usuario_nombre'] = $nombre.' '.$apellido; 
$_SESSION['usuario_imagen'] = $target_path;
$_SESSION['usuario_id'] = $iden;
 

   } ?>
 
 <h1>  <?php if ($contador ==1) {
    echo "Este usuario ya se registro";
echo '<meta http-equiv="refresh" content="1; url=registro.php" />';

     }
else { echo "Te registraste correctamente"; 
echo '<meta http-equiv="refresh" content="1; url=index.php" />';
}?>
 </h1>

 <div class="contenido"> 



 </div>



   </section>     

<div id="div-oculto">  </div>

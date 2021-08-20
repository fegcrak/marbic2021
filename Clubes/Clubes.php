<?php
include_once('../config/config.php');
include_once('usuario.php');
if ( isset($_POST) && !empty($_POST) ){
    $nuevo_usuario = new Usuario(); 
    $nuevo_usuario->crear_usuario($_POST);

    if ($nuevo_usuario){
        echo "Muy bien, usuario guardado";
    }
 }




 function crear_clubes($datos_clubes){ 
     $id= $datos_clubes['id'];
     $nombre = $datos_clubes['nombre'];
     $responsable = $datos_clubes['responsable'];
     $correo_electronico = $datos_clubes['corre_electronico'];
     $celular_responsable = $datos_clubes['celular_responsable'];
     $rol=$datos_clubes['rol'];
     $descripccion =$datos_clubes['descripccion'];
     $ano_de_inicio =$datos_clubes['ano_de_inicio'];
     $cantida_de_personas =$datos_clubes['cantida_de_personas'];


$guardar_datos="INSERT INTO Clubes 
VALUES(NULL,'$id' , '$nombre' , '$responsable' , '$correo_electronico' , $celular_responsable , '$descripccion' , '$ano_de_inicio', '$catidad_de_personas') ";

return mysqli_query($this->conn, $guardar_datos);

    }
    function ver_clubes(){
        $ver_clubes="SELECT *FROM clubes ";
        return mysqli_query($this->conn, $ver_clubes);
    }
       
}
 
?>
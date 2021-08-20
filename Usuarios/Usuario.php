<?php
include_once('../config/Database.php');
class Usuario{
    public $conn;
    function __construct(){
        $db=new Database();
        $this->conn=$db-> __construct();
     }





 function crear_Usuario($datos_usuarios){ 
     $nombre= $datos_usuarios['nombre'];
     $apellido = $datos_usuarios['apellido'];
     $correo_electronico = $datos_usuarios['correo_electronico'];
     $contrasena = $datos_usuarios['contrasena'];
     $rol = $datos_usuarios['rol'];
     $celular=$datos_usuarios['celular'];

$guardar_datos="INSERT INTO usuarios 
VALUES(NULL,'$nombre' , '$apellido' , '$correo_electronico' , '$contrasena' , $celular , '$rol' ) ";

return mysqli_query($this->conn, $guardar_datos);

    }
    function ver_usuarios(){
        $ver_usuariso="SELECT *FROM usuarios ";
        return mysqli_query($this->conn, $ver_usuarios);
    }
       
}
 
?>
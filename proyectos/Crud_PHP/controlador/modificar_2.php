<?php
    if(!empty($_POST["btnmodificar"])){
        
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["rut"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
            
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $rut = $_POST["rut"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];
            
            $sql=$conexion->query(" update persona set nombre='$nombre', apellido='$apellido', rut='$rut', fecha_nac='$fecha', correo='$correo' WHERE Id='$id' ");
            if ($sql==1) {
                header("location:index.php");
            } else {
                echo '<div class="alert alert-danger">Error al modificar personas</div>';
            }
            
        }else{
            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
        }
    }
?>
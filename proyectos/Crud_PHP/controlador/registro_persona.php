<?php
    
    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["rut"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
            
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $rut = $_POST["rut"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];

            $sql=$conexion->query(" INSERT INTO persona (nombre, apellido, rut, fecha_nac, correo) VALUES ('$nombre','$apellido','$rut','$fecha','$correo') ");
            if($sql==1){
                echo '<div class="alert alert-success">Persona registrado correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">Error al registrar persona</div>';
            }

        }else{
            
            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
        }
    }

?>
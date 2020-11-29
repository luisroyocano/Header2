<?php

$server = $_SERVER['PHP_SELF'];
        
        function form_acceso(){
            global $server;
            echo '<form method="post" action="'.$server.'">
                    <input type="text" name="nombre" placeholder="nombre"><br>
                    <input type="text" name="contraseña" placeholder="contraseña"><br>
                    <input type="submit" value="Enviar">
                </form>';
        }
function form_registro(){
    echo '<form method="post" action="">
            <input type="text" name="nombre_registro" placeholder="nombre"><br>
            <input type="text" name="contraseña_registro" placeholder="contraseña"><br>
            <input type="submit" value="Enviar">
        </form>';
}
function comprueba_datos(){
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $data_string = file_get_contents("datos.txt");
    $users = explode(",", $data_string);
    foreach ($users as $dato){
        $usuario_contraseña = explode(" => ", $dato);
        if( $nombre === $usuario_contraseña[0]  && $contraseña === $usuario_contraseña[1]) return true;
    }
    return false;
}

function registrarse(){
    $nuevo_usuario = $_POST['nombre_registro'];
    $contraseña = $_POST['contraseña_registro'];
    $data_string = file_get_contents("datos.txt");
    $data_array = explode(",", $data_string);
    foreach($data_array as $usuario){
       $usuario_contraseña = explode(" => ", $usuario);
       if($usuario_contraseña[0] == $nuevo_usuario) return false;
    }
    array_push($data_array, "$nuevo_usuario => $contraseña");
    file_put_contents("datos.txt", implode(",", $data_array));
    return true;
}

 
 
//comprueba_datos();

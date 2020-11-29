<?php
require_once("funciones.php");

if(isset($_POST['nombre_registro']) && isset($_POST['contraseña_registro'])){
     echo "Registrarse<br>";
    if(registrarse()){
        echo "Registro realizado con éxito";
    }else{
        echo "Error al realizarse el registro, redirigiéndole para probar de nuevo";
        header("Refresh:5;url=registro.php");
    }   
}else{
    echo "Registrarse";
    form_registro();
    
}


<?php

require_once("funciones.php");

if(isset($_POST['nombre']) && isset($_POST['contraseña'])){
    
    if(comprueba_datos()){
        echo "Datos correctos, redirigiendote para dar de alta usuario";
        header('Refresh:4;url=registro.php');
        
    }else{
        echo "Datos incorrectos";
        header('Refresh:4;url=index.php');
    }
    
    
}else{
    echo "Iniciar Sesión<br>";
    form_acceso();
}

<?php

require_once("funciones.php");

if(isset($_POST['nombre']) && isset($_POST['contraseña'])){
    
    comprueba_datos();
}else{
    form_acceso();
}


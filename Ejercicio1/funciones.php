
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
        function comprueba_datos(){
            $nombre = $_POST['nombre'];
            $contraseña = $_POST['contraseña'];
            include("datos.php");
            if(array_key_exists($nombre, $datos)){
                if($datos[$nombre] == $contraseña){
                    header("location:verdatos.php");
                }else{ 
                    echo "Contraseña incorrecta! Espere 10 segundos, está siendo redirigido. <a href='index.php'> O pulse aquí</a>";
                   header('Refresh:10;url=index.php');
                }
            }else{
                echo "Nombre de Usuario no existe Espere 10 segundos, está siendo redirigido. <a href='index.php'> O pulse aquí</a>";
                header('Refresh:10;url=index.php');
            }
        }
                
        ?>


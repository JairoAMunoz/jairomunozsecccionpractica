<?php
        function conectar_BD(){
                $db_host="localhost";
                $db_user="root";
                $db_pass="";
                $database="base1";
                $conexion = null;
            try
            {
                // Conectar con MySQL:
                //$conexion = mysql_connect($db_host, $db_user, $db_pass);
                $conexion =  mysqli_connect('localhost', 'root', '');
                $base=mysqli_select_db($conexion,$database);
                if($conexion)
                {
                    if($base==false){
                         return "ERROR";
                    }else{
                        return $conexion;
                    }
                }
                else{
                         return "ERROR";
                        
                }  
            }
            catch(Exception $e)
            {
               return "ERROR";
            }
        }
        
        $conexion = conectar_BD(); 
       
?>
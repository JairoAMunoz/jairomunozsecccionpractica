<?php
include('conexion1.php');
$correo=$_POST['correo'];
$contra=md5($_POST['palabraSecreta']);
if($correo=="" || $contra==""){
    header('Location:index.php?v=1');
}
$query = "select * from usuario where correo='$correo' AND pass='$contra'";
$result = mysqli_query($conexion, $query);
$fila=mysqli_num_rows($result);
if($fila>=1){
    header('Location:inicio1.php');
echo "datos";
}else{
header('Location:index.php?v=1');
}

?>
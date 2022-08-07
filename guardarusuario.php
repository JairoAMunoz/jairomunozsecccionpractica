<?php
include('conexion1.php');
$ced=$_POST['doc'];
$nom=$_POST['nombre'];
$correo=$_POST['correo'];
$contra=md5($_POST['palabraSecreta']);
$query = "INSERT INTO usuario (cedula, nombre, correo, pass) VALUES ('$ced', '$nom', '$correo', '$contra')";
$result = mysqli_query($conexion, $query);
header('Location:index.php');
?>
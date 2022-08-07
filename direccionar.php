<?php
$valor=$_GET['combo'];
if($valor==1){
header('Location:paginacion.php');
}
if($valor==2){
    header('Location:paginacion2.php');  
    }

?>
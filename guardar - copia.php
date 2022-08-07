<?php
//include('conexion1.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="jquery.min.js"></script>
<script type="text/javascript">
// Show loading overlay when ajax request starts
$( document ).ajaxStart(function() {
    $('.loading-overlay').show();
});
// Hide loading overlay when ajax request completes
$( document ).ajaxStop(function() {
    $('.loading-overlay').hide();
});
</script>
  </head>
  <body>
      

<?php
include('conexion1.php');
$a=$_GET['cedula'];

$query = "SELECT * FROM tabla1 where cedula='$a'";
$result = mysqli_query($conexion, $query);
$cont1=mysqli_num_rows($result);
  
if($result!=NULL || $cont1==1){

    while($row = mysqli_fetch_array($result))
    {
     $id1=$row["id"]; 
     $nombre2=$row["nombre"];
     $cedula2= $row["cedula"]; 
    }






    $query3 = "SELECT * FROM tabla2 where cedula='$a'";
    $result3 = mysqli_query($conexion, $query3);
    $cont=mysqli_num_rows($result3);
   
    
  
    if( $cont==1){
echo $cont;
    //$query2="INSERT INTO tabla2 (id, nombre, cedula) VALUES ('$id1', '$nombre2', '$cedula2')";
//$result2 = mysqli_query($conexion, $query2);



    }else{
     echo "la informacion ingresada no corresponde a la tabla1, debe ingresar un registro existente";

}
echo "el datos existe en la tabla 2...No se puede duplicar           ";
echo '</br>';
echo '<a href="consultar.php">regresar</a>';



}else{
        echo "dato no existe";
    }

?>

</body>
</html>
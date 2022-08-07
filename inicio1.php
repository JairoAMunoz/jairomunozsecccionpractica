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


<style>
  #contenedor {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

#contenedor > div {
  width: 50%;
}
  </style>

  </head>
  <body>
      
  <header>

  <center><h3>SISTEMA DE VERIFICACION DE DATOS -  UNAD</h3></center>
</br>

  <div id="contenedor">
  <div>

  <main role="main" class="container my-auto">
            <div class="row">
                <div id="login" class="col-lg-5 offset-lg-4 col-md-6 offset-md-3
                    col-12">
                    
                    <img class="img-fluid mx-auto d-block rounded"
                        src="https://picsum.photos/id/870/300/200" />

     <center>
  <form name="formulario" method="get" action="direccionar.php">
  <!-- Lista de selección -->
  Selecciona la opción deseada:
  <p>
  <select name="combo" id="combo">
    <!-- Opciones de la lista -->
       <option value="1" selected>tabla1</option> <!-- Opción por defecto -->
    <option value="2"  >tabla2</option>
  </select>
</p>
  <button type='submit' class="btn btn-primary">Enviar Respuesta</button>
</form>
</center>
<?php
$re=isset($_GET['combo']);

if($re==1){
//$consulta="select * from tabla1";
//$resultado=mysqli_query($consulta);
include('paginacion.php');
}
if($re=='2'){
    $consulta="select * from tabla2";
    $resultado=mysqli_query($consulta);
}

?>
 
 </div>

            </div>
        </main>

</div>
<div>
    <h3><p>Buscar datos</p></h3>

    <img src="consulta.png" width="100" heidth="100" >
    <p>
</p>
    <form name="formulario" method="get" action="consultar.php">
    <button type='submit' class="btn btn-primary">Consultar tabla1</button>
</form>



  </div>
</div>




</header>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include('conexion1.php');
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
    
  <header>
  



  



  <main role="main" class="container my-auto">
              <div class="row">
                  <div id="login" class="col-lg-6 offset-lg-4 col-md-6 offset-md-3
                      col-12">
                      <h2 class="text-center">Bienvenido al Sistema de pruebas UNAD
          
  
                      </h2>
                      <form name="formulario" method="get" action="inicio1.php">
  <button type='submit' class="btn btn-primary">Inicio</button>
  </form>
  
                          <form name="formulario" method="get" action="direccionar.php">
    <!-- Lista de selección -->
    Selecciona la opción deseada:
    <select name="combo" id="combo">
      <!-- Opciones de la lista -->
         <option value="1" selected>tabla1</option> <!-- Opción por defecto -->
      <option value="2">tabla2</option>
    </select>
    <button type='submit'class="btn btn-primary">Enviar Respuesta</button>
  </form>
  
  
  
  
                  </div>
              </div>
          </main>
  
          </header>
       
    
  
  
  



  <!-- /.container-fluid --> 

  </nav>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>REGISTROS GUARDADOS TABLA 2</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
<div class="panel-body">


<?php
$conexion = mysqli_connect("localhost", "root", "", "base1");
$registro_por_pagina = 5;
$pagina = '';
if(isset($_GET["pagina"]))
{
 $pagina = $_GET["pagina"];
}
else
{
 $pagina = 1;
}

$start_from = ($pagina-1)*$registro_por_pagina;

$query = "SELECT * FROM tabla2 order by id desc LIMIT $start_from, $registro_por_pagina";
$result = mysqli_query($conexion, $query);

?>

<div class="table-responsive">
    <table class="table table-bordered">
     <tr>
     
      <th>ID</th>
      <th>Nombre</th>
      <th>cedula</th>
     </tr>
     <?php
	 $number=0;
     while($row = mysqli_fetch_array($result))
     {
		 $number++;
     ?>
     <tr>
      <?php //echo $number; ?>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["nombre"]; ?></td>
      <td><?php echo $row["cedula"]; ?></td>
     </tr>
     <?php
     }
     ?>
    </table>
     <div align="center">
    <br />
    <?php
    $page_query = "SELECT * FROM tabla2 ORDER BY id DESC";
    $page_result = mysqli_query($conexion, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$registro_por_pagina);
    $start_loop = $pagina;
    $diferencia = $total_pages - $pagina;
    if($diferencia <= 5)
    {
     $start_loop = $total_pages - 3;
    }
    $end_loop = $start_loop + 4;
    if($pagina > 1)
    {
     echo "<a class='pagina' href='paginacion2.php?pagina=1'>Primera>> </a>";
     echo "<a class='pagina' href='paginacion.php?pagina=".($pagina - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
        if($i==0 || $i<=-1){}else{
     echo "<a class='pagina' href='paginacion2.php?pagina=".$i."'>"."  ".$i."  ". "</a>";
        }
    }
    if($pagina <= $end_loop)
    {
     echo "<a class='pagina' href='paginacion2.php?pagina=".($pagina + 1)."'>>></a>";
     echo "<a class='pagina' href='paginacion2.php?pagina=".$total_pages."'>Última</a>";
    }
    
    
    ?>
    </div>
    <br /><br />

 </div>


</div>
</div>
  </div>
</div>



</body>
</html> 
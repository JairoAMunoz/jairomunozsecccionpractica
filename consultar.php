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

</header>



  <div class="container">
<div>

  <form name="form1" method="get" action="guardar.php">
      <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><h4>CONSULTAR USUARIO</h4></label>
    
    
      </div>
          <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Digite la cedula</label>
              <div class="col-sm-3">
                   <input type="text" class="form-control" name="cedula" id="cedula" placeholder="cedula">
              </div>
          </div>
      <button type='submit' class="btn btn-primary">Enviar Respuesta</button>
  </form>

</div>


<div>
 Ingrese la cedula que desea copiar a la tabla 2, Recuerde que debe exitir en la tabla 1
</div>
</div>

</body>
</html>

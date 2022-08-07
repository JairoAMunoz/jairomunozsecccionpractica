<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>


<body>
        <main role="main" class="container my-auto">
            <div class="row">
                <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                    col-12">
                    <h2 class="text-center">Bienvenido al Sistema de pruebas UNAD</h2>
                    <img class="img-fluid mx-auto d-block rounded"
                        src="https://picsum.photos/id/870/300/200" />

                        <form name="formulario" method="post" action="validar.php">
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input id="correo" name="correo"
                                class="form-control" type="email"
                                placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="palabraSecreta">Contraseña</label>
                            <input id="palabraSecreta" name="palabraSecreta"
                                class="form-control" type="password"
                                placeholder="Contraseña">
                        </div>
                        <button type="submit" name="validar"  class="btn btn-primary mb-2">
                            Entrar
                        </button>
                    </form> 
                        
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-secundary" data-toggle="modal" data-target="#exampleModal">
Registrarse
</button>



                    </form>
                </div>
            </div>
        </main>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="formulario" method="post" action="guardarusuario.php">

        <div class="form-group">Numero documento</label>
                            <input id="doc" name="doc"
                                class="form-control" type="number"
                                placeholder="Número de documento">
                        </div>
        <div class="form-group">
                        <label for="correo">Nombre Completo</label>
                            <input id="nombre" name="nombre"
                                class="form-control" type="text"
                                placeholder="Nombre completo">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input id="correo" name="correo"
                                class="form-control" type="email"
                                placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="palabraSecreta">Contraseña</label>
                            <input id="palabraSecreta" name="palabraSecreta"
                                class="form-control" type="password"
                                placeholder="Contraseña">
                        </div>

  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
        <button type="submit" class="btn btn-primary">Guardar Registro</button>

      </div>


    </div>
  </div>
</div>
</form>
<div class="row">
                <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                    col-12">

<?php
if (isset($_GET['v'])){
echo "Usuario y Contraseña incorrectos";
}
?>
</div>
</div>



    </body>



</html>
Clase 5 (3 de Abril de 2017)
=============================

### Grid de Bootstrap
<https://www.w3schools.com/bootstrap/bootstrap_grid_system.asp> 

### Arrays en PHP
<http://php.net/manual/es/language.types.array.php>

### Protocolo POST vs GET
<https://www.w3schools.com/tags/ref_httpmethods.asp>

### Plataformas de Starup
- Amazon (AWS) <https://aws.amazon.com/es/>
- Heroku <https://www.heroku.com/>
- Cloud9 <https://c9.io/>

# Continuar en el archivo final de la ultima clase

Validar que los campos del formulario tengan un valor asignado

~~~
<?php
  if (isset($_POST['enviar']) && $_POST['enviar'] == '1') {
    // print_r($_POST);
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    if (empty($nombre)) {
      echo "Debe ingresar su nombre";
      exit;
    } if (empty($correo)) {
      echo "Debe ingresar su correo";
      exit;
    } if ($pais == 0) {
      echo "Debe seleccionar un país";
      exit;
    }
  }
 ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario con Boostrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>

    <div class="row">
      <div class="container">
        <div class="col-md-6">
          <form class="" action="" method="post">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="correo">Correo</label>
              <input type="email" name="correo" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="pais">Ingrese país</label>
              <select class="form-control" name="pais">
                <option value="0">Seleccione</option>
                <option value="1">Venezuela</option>
                <option value="2">Chile</option>
              </select>
            </div>
            <div class="form-group">
              <input type="hidden" name="enviar" value="1" class="form-control">
              <input type="submit" name="" value="Enviar" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>


  </body>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="js/jquery-3.2.0.min.js" charset="utf-8"></script>
</html>
~~~




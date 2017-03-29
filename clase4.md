Clase 4 (28 de Marzo de 2017)
=============================
# Continuar en el archivo final de la ultima clase

Debemos tomar conciencia de los posibles fallos de seguridad en una aplicación web.
- Lo más importante en una aplicaión son los datos (bases de datos)

## El archivo de la clase termino de la siguiente forma:

~~~
<?php
  if (isset($_POST['enviar']) && $_POST['enviar'] == '1') {
    print_r($_POST);
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
              <label for="correo">Ingrese país</label>
              <select class="form-control" name="">
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

Tarea para la proxíma clase:
- Comprobar que los valores no vengan vaciós en el formulario

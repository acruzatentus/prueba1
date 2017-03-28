Clase 3 (27 de Marzo de 2017)
============================

# Archivo base de la clase anterior:

~~~
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Proyecto 1</title>
  </head>
  <body>
    <?php
      $numero = 1;
      $saludo = "Hola mundo";
      echo $saludo . " soy el numero " . $numero;
    ?>

    <br><br>
    <p>
      <?php
        include('funciones.php');
       ?>
    </p>
  </body>
</html>
~~~

## Archivo de funciones para probar include.php

~~~
<?php
  echo "Archivo externo";
 ?>
~~~

## Validaciones básicas en PHP

Funciones de validación en php:

~~~
if($numero)               //Pregunta implícita si tiene un valor la variable $numero
if(isset($numero))        //Pregunta si la variable existe
if(empty($numero))        //Pregunta si la variable esta vacía
if(is_numeric($numero))   //Pregunta si el valor de la variable es un numero
if(is_int($numero))       //Pregunta si el valor de la variable es un numero entero
~~~

Funcíon para cargar archivos al inicio:

~~~
require_once("archivo");
inclue_once("archivo");
~~~
---

### Formulario para enviar por php:

~~~
<?php
  require_once("funciones.php");
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Clase 3</title>
  </head>
  <body>
    <form class="formulario" action="funciones.php" method="post">
      <label for="name">Nombre</label>
      <input type="text" name="nombre" value="">
      <label for="email">Email</label>
      <input type="email" name="email" value="">
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
~~~

1. Recuperar los datos ingresados en el formulario
2. Confirmar que los datos no estén vacíos
3. Utilizar un campo oculto para validar que los datos vienen por post

El archivo HTML queda de la siguiente forma:

~~~
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Clase 3</title>
  </head>
  <body>
    <form class="formulario" action="funciones.php" method="post">
      <label for="name">Nombre</label>
      <input type="text" name="nombre" value="">
      <br>
      <label for="email">Email</label>
      <input type="email" name="email" value="">
      <br>
      <input type="submit" name="" value="Enviar">
      <input type="hidden" name="enviar" value="enviar"> <!--Campo oculto-->
    </form>
  </body>
</html>
~~~

El archivo funciones.php queda de la siguiente forma:

~~~
<?php
  // echo "Archivo externo";
  //Recuperar variables del formulario:
  if (isset($_POST['enviar']) && $_POST['enviar'] == 'enviar') {
    //print_r($_POST); Recupera todos los datos via POST desde un formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];

    if(empty($nombre)) {
      echo "Ingrese un nombre";
    }elseif (empty($correo)) {
      echo "Ingrese un email";
    }else {
      echo "Bienvenido ".$nombre."<br>";
      echo "Tu correo es $correo";
    }
  }

 ?>
~~~

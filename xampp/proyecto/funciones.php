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

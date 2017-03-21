Clase 2 (21 de Marzo de 2017)
=============================

1. Ejecutar XAMPP o APPSERVER o WAMPPSERVER, ETC
2. Crear una carpeta en directorio web (htdocss, www)
3. Crear un archivo index.php
4. Agregar la estructura básica de una pagina web al documento index.php
5. Primer Hola mundo de PHP embebido en HTML
+ Se recomienda incluirlo dentro de la etiqueta **<body></body>** de HTML
+ Utilizar la función **echo** de PHP para *mostrar* el texto en el navegador

<body>
    <?php
    echo "Hola mundo";
     ?>
</body>

6. Crear una variable e imprimir su valor con PHP

<?php
  $numero = 1;
  $saludo = "Hola mundo";
  echo $numero;
?>

+ El código anterior imprime el valor dentro de la variable *$numero*
---

7. Concatenar texto con una variable

El operador de concatenación es el punto "."

<?php
  $numero = 1;
  $saludo = "Hola mundo";
  echo "Soy el numero ".$numero;
?>

+ El código anterior imprime "Soy el numero 1"
---

8. Concatenar dos variables e imprimir el valor

El operador de concatenación es el punto "."

<?php
  $numero = 1;
  $saludo = "Hola mundo";
  echo $saludo . " soy el numero " . $numero;
?>

+ El código anterior imprime "Hola mundo soy el numero 1"
---

9. Condicionales

- Nota: Los comentarios en PHP se pueden realizar con // *una linea* y /* - */ *múltiples lineas*

<?php
  $numero = 1;
  $saludo = "Hola mundo";
  if($numero) {   //consulta si existe la variable numero aun que esta tenga valor **null**
    echo $saludo;
  }
?>

+ El código anterior imprime "Hola mundo" si existe la váriable *numero*
---

10. Comparaciones

<?php
  $numero = 1;
  $saludo = "Hola mundo";
  if($numero == 1) {   //consulta si existe la variable numero aun que esta tenga valor **null**
    echo $saludo;
  } else {
    echo "La variable numero no es igual a 1";
  }
?>

Se pueden utilizar los comparadores >, <, ==, ===, etc...

+ El código anterior imprime "Hola mundo" si el valor de la váriable *numero* es igual a 1 sino el mensaje "La variable numero no es igual a 1"
---

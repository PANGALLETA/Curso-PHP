<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    El ambio o alcance de las variables pasa cuando dos o mas variables se llaman igual, y al imprimirlas solo va a tomar la ultima,
    pero si tienes una fuera de una funcion y otra adentro de una, asi llames a la funcion este solo mostrara la que esta
    afuera, amenos de que la llames con funciones globales que se muestra en el archivo lib.php
    */
      include "lib.php";  
      $chancla="Si te alcanzo</br>";
      cambioAlcance();
      echo $chancla;
      echo $_SERVER['HTTP_HOST'];  
    ?>
</body>
</html>
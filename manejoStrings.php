<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .rojo{
            color: red;
        }
    </style>
    <title>Strings</title>
</head>
<body>
    <?php
        // si necesito imprimir codigo o una clase de html y encadenarlo con un string toca con comillas simples
        // echo '<p class="rojo"> Hola Humano Saludo </p>';
        // pero si necesito si o si las comillas dobles toca hacer lo siguiente con \
        $saludo="saludos desde pangalleta";
        echo "<p class=\"rojo\"> Hola Humano $saludo </p>";
        /*
        comparar cadenas de strings con la escala ascii y los resta si es igual a 0 son iguales si es mayor o menor que 0
        son diferentes 
        strcmp hola hola
               1234 1234 = 0
        strcmp hola Hola
               1234 8234 = 8
        pero si quieres comprar las cadenas sin importar mayusculas y minusculas es con
        strcasecmp
        */
        $string1="Pangalleta";
        $string2="pangalleta";
        /*
        $resultado=strcmp($string2,$string1);
        //$resultado=strcasecmp($string2,$string1);
        //echo "EL resultado es $resultado</br>";
        if($resultado==0){
            echo "Si, Son iguales</br>";
        }
        else{
            echo "No, no son iguales</br>";
        }
        */
        if($string1==$string1){
            echo "Si, Son iguales</br>";
        }
        else{
            echo "No, no son iguales</br>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <?php 
        // include no tira el programa se usa para llamar librerias o otro archivo
        // el _once es para incluir la libreria varias veces pero sin el _once solo se puede uno
        include_once "lib.php";
        // riquire tira el programa se usa para llamar librerias o otro archivo
        require_once "lib.php";
        echo "Hola humano saludos </br>";
        echo "desde php </br>";
        desdeAqui();        
    ?>
</body>

</html>

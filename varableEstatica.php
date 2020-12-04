<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Estaticas</title>
</head>
<body>
    <?php
        function incrementar(){
            /*
            las variables globales no se pueden inicializar osea no puedo decir que son iguales a algo
            las variables estaticas si se dejan inicializar
            estas variables estaticas cambian el valor cada vez que hagan una operacion con ella
            */
            //global $contador;
            static $contador = 4;
            $contador++;
            echo $contador."</br>";
        }
        incrementar();//1
        incrementar();//2
        incrementar();//3
        incrementar();//4
    ?>
</body>
</html>
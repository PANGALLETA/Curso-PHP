<?php 
    function desdeAqui(){
        echo "desde una funcion </br>";
        }
        
    function cambioAlcance(){
        /*
        la funcion global o super global es para poner una variable por encima de otra
        */
        // global $chancla;
        // $GLOBALS['nombre de la variable']
        $GLOBALS['chancla']="No, no me alcanzaste</br>";
        }
?>
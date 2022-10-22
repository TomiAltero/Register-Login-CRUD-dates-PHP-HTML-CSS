<?php
    $patron = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    $cadena = "ebc#";

    for($i = 0; $i < strlen($cadena); $i++) {
        if(strpos($patron , substr($cadena , $i , 1)) === false){
            echo "Existen caracteres especiales";
        }else {
            echo "Coincide con el patron";
        }

        
    }

?>
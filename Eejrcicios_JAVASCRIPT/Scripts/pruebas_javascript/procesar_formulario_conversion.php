<?php

if ($_POST)
{
    $numero = $_POST["caja_decimal"];
    echo "Binario: " . decbin ( $numero ) . " <br>";

    echo "Octal: " . decoct($numero) . "<br>";

    echo "Hexadecimal: " . dechex($numero);
    

}
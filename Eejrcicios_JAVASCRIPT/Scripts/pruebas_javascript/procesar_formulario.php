
<?php

if ($_POST)
{
   
    $nombre = $_POST["caja_nombres"];
    $pimerap = $_POST["caja_primer_ap"];
    $segundoap = $_POST["caja_segundo_ap"];
    $genero = $_POST["genero"];
    $dia = $_POST["dia"];
    $mes = $_POST["dia"];
    $año = $_POST["dia"];
    
    $d = substr($dia,8,8);
    $me = substr($mes,4,4);
    $a = substr($año,2,2);
    $h = "H";
    $m = "M";
    if($genero == 1){
        $n =substr($nombre, 0, 1);
        $pap = substr($pimerap, 0, 2);
        $sap = substr($segundoap, 0, 1);
        echo strtoupper( "CURP: " . $pap . $sap . $n . $h);
        
    }
    
    if($genero == 2){
        $n =substr($nombre, 0, 1);
        $pap = substr($pimerap, 0, 2);
        $sap = substr($segundoap, 0, 1);
        echo strtoupper( "CURP: " . $pap . $sap . $n . $a . $d . $d . $m );
        
  
    }
}


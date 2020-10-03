<?php

if ($_POST)
{
    $indice = 0; 
   $vocalesEncontradas = 0;
   $consonantesEncontradas = 0;
   $letraRepetida = 0;
   $cadenaLoca = '';

   $cadena = $_POST["caja_cadena"];
   $letra = $_POST["caja_letra"];

   $cadena = strtolower($cadena);
   $longitud = strlen($cadena);


   for ($indice = 0; $indice < $longitud; $indice++) { 
        if (in_array($cadena[$indice], ["a", "e", "i", "o", "u"])) {
			$vocalesEncontradas++;
        }else if(in_array($cadena[$indice],["b","c","d","f","g","h","j","k","l","m","n"
        ,"ñ","p","q","r","s","t","v","w","x","y","z"])){
            $consonantesEncontradas++;
        }
         if(in_array($cadena[$indice],[$letra])){
             
            $letraRepetida++;
        }
     
        if($indice % 2 == 0){
            $cadenaLoca = $cadenaLoca . strtoupper($cadena[$indice]);
        }else{
            $cadenaLoca = $cadenaLoca . strtolower($cadena[$indice]);
        }

	}
    echo "Cantidad de vocales: " . $vocalesEncontradas . "<br>";
    
    echo "Cantidad de consonantes: " . $consonantesEncontradas . "<br>";

    echo "Cantidad de letra " . $letra . ": " . $letraRepetida . "<br>";

    echo "Cadena loca: " . $cadenaLoca;

    

}
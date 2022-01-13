<?php

function staircase($n) {
    // Write your code here
    $cant_espacios = $n;
    
    for ($altura = 1; $altura <= $n; $altura++){
        
        $cant_espacios--;
        
        for ($espacios = 1; $espacios <= $cant_espacios; $espacios++){
            
            echo " ";
            
        }
        
        for ($simbolo = 1; $simbolo <= $altura; $simbolo++){
            
            echo "#";
            
        }
        
        echo "\n";
        
    }

}

staircase(readline("Ingrese numero de lineas de la escalera: "));

















?>
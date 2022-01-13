<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here

    if ( substr($s,8,2) == 'AM' & substr($s,0,2) == 12){
        
        $s[0]=0; $s[1]=0;
        
    }else if ( substr($s,8,2) == 'PM' & substr($s,0,2) == 12 ){
        
        $s[0]=1; $s[1]=2;
        
    }else if ( substr($s,8,2) == 'PM' ){
        
        $valor_1= intval($s[0]);
        $valor_2= intval($s[1]);
        
        $valor_1+=1;
        $valor_2+=2;
        
        $s[0]=$valor_1; $s[1]=$valor_2;
    }
    
    $s[8]=' ';
    $s[9]=' ';
    return $s;
}

echo timeConversion(readline());

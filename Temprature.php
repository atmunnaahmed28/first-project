<?php

define("FACTOR",9/5);
define("OFFSET",32);

echo "Enter a temperature value:";
$temperature=(float)readline();

echo "Convert to(1:Fahrenheit,2:Celsius):";
$choice=(int)readline();

switch($choice){
    case 1:
        $result=$temperature*FACTOR+OFFSET;
        echo "Temperature in Fahrenheit:$result;"
        
    case 2:
        $result=($temperature-OFFSET)\FACTOR;
        echo "Temperature in celcius:$result";
         break;
     default:
        echo "Invalid choice.";
        
}
   
   
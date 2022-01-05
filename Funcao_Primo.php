<?php


function Primo ($inicial,$final){
  
$n1=$final-$inicial;

for ($i=$inicial; $i<$final; $i++){
     $divisores = 0;
     
 for($j = $i; $j >= 1; $j--)
    {
        if (($i % $j) == 0) {
            $divisores++;
        }
    }
     
    if ($divisores == 2)
    {
        echo $i . ', ';
    }
} 
 	
	

}

Primo(10,29);
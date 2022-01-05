<?php


function SeculoAno($ano){

     $posfinal =substr ($ano,0,2);
  
     $pos = substr($ano,0,-2); 
   
  if ($posfinal=="00"){
     
    echo "Século"." ". $pos;
     
  }else {
    echo "Século"." ". $pos +1;
  
  }
}

  SeculoAno(200);




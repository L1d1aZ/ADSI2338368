<?php

   for ($i=1; $i <=10 ; $i++){
        $resultado = determinarpar($i);
        if ($resultado) {
         echo "el numero ".$i.": es par <br/>";
        }else{    
          echo "el numero ".$i.":es impar <br/>";
        }
    
    }
   
    function determinarpar($numero)
    {
        if ($numero % 2 ==0) {
            return true;
        }else{
            return false;
        }     

    }






?>
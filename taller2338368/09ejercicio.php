<?php 
    #hallar el numero  digitados distinto de otro

    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];
    $numero3 = $_REQUEST["numero3"];

    #procedimiento

    if ($numero1 > $numero2 AND $numero1 > $numero3) {
        $numeromay = $numero1;
    }elseif ($numero2 > $numero3) {
            $numeromay = $numero2;
        } else{
            $numeromay = $numero3;
            
        }
    echo "<h2>el numero distinto es:" . $numeromay. "</h2>";
   
    
?>
<?php
$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$numero3 = $_REQUEST["numero3"];

$suma = $numero1 + $numero2 + $numero3;
  echo " la suma de ".$numero1."mas".$numero2."mas".$numero3." es igual a: " .$suma;

   
  
?>






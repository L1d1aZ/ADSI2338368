
<?php



$numero = $_REQUEST["numero"];


 
       
   if ( $numero<=1000){
       ECHO "<h2>"."A ELEGIDO ".$numero." NUMEROS ";
       echo "<br><br>";
       $a = 0;
       $contador = 0;
       while ($a < $numero) {
           $a = $a+1;
          
           $contador = $contador + $a;
           echo $a . "<br>";
       }
       ECHO "<h2>"."LA SUMA ES IGUAL A: ";
       echo "<br><br>";
       echo $contador;
       echo "<br><br>";
    
}else
echo "el numero no es valido por favor verifiquelo y vuelva a intentarlo";

           
?>
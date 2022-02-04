<?php 

$nombre = $_REQUEST["nombres"];
$Documento = $_REQUEST["documento"];
$valor = $_REQUEST["valor"];
$tiempo = $_REQUEST["tiempo"];
     
$Nombre = strtoupper($nombre);
echo$Nombre."<p>";
   //procemiento
   if ($valor>5000000) {
       $interes= ($valor*0.025)*$tiempo;
       $total=$interes+$valor;
       echo"El valor total a pagar es: <p> $$total";
   }else {
        $interes= ($valor*0.022)*$tiempo;
        $total=$interes+$valor;
        echo" El valor total a pagar es: <p> $$total";
   }
  
?>



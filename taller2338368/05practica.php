<?php 
 session_start();
 $figura = $_POST["figura"];
 $resultado =0;

 switch ($figura){ 
   case "triangulo";
   $base = $_POST["base"];
   $altura = $_POST["altura"];
   $resultado = $base * $altura /2;
   echo "el area del triangulo es:  " . $resultado;

   break;
    case "cuadrado";
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
    $resultado = $lado1 * $lado2; 
    echo "el area del cuadrado es: " . $resultado;

    break;
    case "rectangulo";
   $largo = $_POST["largo"];
   $ancho = $_POST["ancho"];
   $resultado = $largo * $ancho;
   echo "el area del rectangulo es: " . $resultado;
   
   break;
   case "circulo";
   $radio = $_POST["radio"];
   $resultado = ($radio ** 2) * M_PI; 
   echo "el area del circulo es: " . $resultado;

 } 
 

?>

   




?>
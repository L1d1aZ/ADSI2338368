<?php

echo '<form action="formulario_08.php" method="get">';
echo 'Numero uno:<input name="uno" type="text" /><br>';
echo 'Numero dos:<input name="dos" type="text" /><br>';
echo '<input name="" type="submit" />';
echo '</form>';
$vrnum1 = $_GET["numero1"]; //dividendo
$vrnum2 = $_GET["numero2"]; //divisor
$vrnum3 = $vrnum1/$vrnum2 ; //cosiente
$vrnum4 = $vrnum3*$vrnum2 ; //multiplicacion entre el divisor y el cosiente

if($vrnum1 % $vrnum2 == 0){
    echo "Es divisible de 20";
}else{
    echo "No es divisible";
}
?>
<?php
if (isset($_REQUEST["btn_enviar"])) {
  $vrnumero = $_REQUEST["numero"];
if ($vrnumero <= 100) {

  
  
  
$vrcontador =0;
echo "<h1> estructura con ciclo while </h1>";

while($vrcontador<=10) {
  echo "$vrnumero x $vrcontador = ".($vrnumero*$vrcontador)."<br/>";
  $vrcontador++;
  
}

echo "<h1> estructura con ciclo for </h1>";
for ($vrcontador=0; $vrcontador <= 10; $vrcontador++) {
  $total = $vrcontador*$vrcontador;
  echo $vrnumero. " x ".$vrcontador. "=" .$total. "</br>";

}
echo "<h1> estructura con ciclo do whiler </h1>";
$vrcontador =0;
DO {
  echo "$vrnumero x $vrcontador = ".($vrnumero*$vrcontador)."<br/>";
  $vrcontador++;

}while ($vrcontador <= 100);
echo "<h1> fin del bucle </h1>";

}else{
  echo "ingrese un numero que no sea mayor a 100 " .$vrnumero."</br>";

}
}
?>
</center>

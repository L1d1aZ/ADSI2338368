<?php
    require_once("01ejercicio.php");
    $objVehiculo = new Vehiculo("MCN-982", "MAZDA", 2020, 4550, 70 , 30);
$objVehiculo->getVehiculo();

print_r('<pre>');
print_r($objVehiculo);
print_r('</pre');

echo"<br>";
echo $objVehiculo->getMarca();
echo"<br>";
$objVehiculo->setMarca("FORD");
echo $objVehiculo->getMarca();
echo"<br>";
echo $objVehiculo->modelo;
echo"<br>";
echo " La distancia recorrida es: ". $objVehiculo -> calculo_distancia();


?>
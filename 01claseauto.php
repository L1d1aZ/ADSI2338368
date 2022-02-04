<?php
    require_once("01_ejercicio.php");

    $objvehiculo = new vehiculo("MCN-930","Mazda",2020,45500);
    $objvehiculo->getvehiculo();
    print_r('<pre>');
    print_r($objvehiculo);
    print_r('<pre>');

    echo "<br>";
    echo $objvehiculo->marca;

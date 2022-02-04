
<?php
    $nombre = $_REQUEST["nombre"];
    $valor = $_REQUEST["valor"];
    $tiempo = $_REQUEST["tiempo"];

  
    echo "<h3>Benvenido </h3>";
    echo $nombre;

    $intereses= ($valor*0.05)*$tiempo;
    $total=$valor+$intereses;
    echo "<p> Su valor total a pagar: <br>".$total;
       
    
   
?>
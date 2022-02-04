<?php  
print"calcular salario de un trabajador <br>";
$vrnombres = $_REQUEST["text_nombres"];
$vrdocumento = $_REQUEST["text_documento"];
$vrsalario = $_REQUEST["num_salario"];
$vrboni = $_REQUEST["num_boni"];
echo "Nombres: ".$vrnombres."<br>";
echo "documento: ".$vrdocumento. "<br>";
echo "Salario: ".$vrsalario. "<br>";
$bonif = $vrboni / 100;
$aumento = $vrsalario * $bonif + $vrsalario;
echo "Salario total: ".$aumento."<br>";
echo "<br><br>";
echo '<a href="http://localhost/Adsi_2338368/01_formulario.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'

?>
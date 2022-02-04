<?php
$nom = $_POST['nombre']; $no1 = $_POST['n1'];$no2 = $_POST['n2']; $no3 = $_POST['n3'];
$resultado = round(($no1 + $no2 + $no3) / 3);
echo "la nota del alumno es resultado <br>";
class clasesuma{
    public $gano=0;
    public function m_suma($gano,$resultado) {
        $gano = $resultado;
        if($gano>=0.0 && $gano<=2.0) {
            echo "por lo tamto  1/4 el perdio.";
        } elseif($gano>=3.0 && $gano<=4.0) { 
            echo "por lo tanto 1/4 el alumno gana.";
        } elseif($gano>=4.5 && $gano<=5.0) { 
            echo "por lo tanto el 1/4 alumno gana.";
        } elseif($gano>=5.0) { 
            echo "por lo tanto el 1/4 alumno gana la materia.";
        } else {
            echo "por fabor introduce bien los datos.";
        }


    }
}$obj = new clasesuma();
 echo $obj ->M_suma($no1, $no2, $no3);

?>
<?php 
    $var_anio = 2000;
    $var_resul = 2021 - $var_anio;

    if ($var_anio == 0) {
        echo "Año no valido: ".$var_anio;
    }elseif ($var_resul >= 18) {
        echo "Es mayor de edad, su edad es: ". $var_resul;
    }else{
        echo "Es menor de edad, su edad es: " . $var_resul;
    }

?>
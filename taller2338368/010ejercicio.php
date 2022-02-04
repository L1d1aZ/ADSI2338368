<?php  

    if (isset($_POST["btn_enviar"])) {
        echo"<h3> Calculo de horas extras </h3>";
        $nombres = $_POST["nombres"];
        $salario = $_POST["salario"];
        $D = $_POST["diurna"];
        $N = $_POST["nocturna"];
        echo"<p> $nombres <p>";
        echo" Salario Basico: $".$salario;
        
        #precio horas extras
        $extras_D=(($salario/30)/8)*0.05;
        $extras_N=(($salario/30)/8)*0.10;
        $total_D=$extras_D*$D;
        $total_N=$extras_N*$N;
        $total_extras=$total_D+$total_N;
        echo"<p>valor de las horas extras: <br>";
        echo"Horas diurnas: <br>".$extras_D;
        echo"<p>Horas nocturnas: <br>".$extras_N;

        #total devengado
        $salarioT= $salario+$total_extras;

        echo"<p> Salario total devengado: <br> $".$salarioT;


        

    }

?>
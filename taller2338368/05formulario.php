<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>CALCULAR EL AREA</H1>
    <br>
    <h2>escoja una figura </h2>
    <br>
    <p></p>
    <form action="05practica.php" method="post">
        <input type="radio" name="figura" value="triangulo">triangulo<br/>
        <input type="radio" name="figura" value="cuadrado">cuadrado<br/>
        <input type="radio" name="figura" value="rectangulo">rectangulo<br/>
        <input type="radio" name="figura" value="circulo">circulo<br/>
        <br/> 
    <label  for= "base">Base</label>
    <input type= "number" id="base" name="base"/>
    <br/>
    <label  for= "altura">Altura</label>
    <input type= "number" id="altura" name="altura"/>
    <br/>
    <label for="lado1">Lado1 </label> 
    <input type="number" id="lado1" name="lado1" />
    <br/> 
    <label for="lado2">Lado2 </label> 
    <input type="number" id="lado2" name="lado2" />
    <br/> 
    <label for="largo">Largo </label> 
    <input type="number" id="largo" name="largo" />
    <br/>
    <label for="ancho">Ancho </label> 
    <input type="number" id="ancho" name="ancho" />
    <br/> 
    <label for="radio">Radio </label> 
    <input type="number" id="radio" name="radio" />
    <br/> 
    
<input type="submit" name="btn_enviar" value="Ejecutar">

    </form>

</body>

</html> 
<?php
        session_start();
        if(isset($_SESSION['resultado'])){
            echo 'El resultado es ' . $_SESSION['resultado'];
            unset($_SESSION['resultado']);
        }

    
    ?>
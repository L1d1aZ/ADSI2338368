<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CALCULAR EL SALARIO DE UN TRABAJADOR</h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <form action="01_practica.php" method="get">
        <label>Digite los nombres: </label>
        <input type="text" name="text_nombres"><br>
        <label>Digite el documento: </label>
        <input type="text" name="text_documento"><br>
        <label>Digite el salario: </label>
        <input type="number" name="num_salario"><br>
        <label>Digite el salario devengado: </label>
        <input type="number" name="num_boni"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>

</body>

</html>
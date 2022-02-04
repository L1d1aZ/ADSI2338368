<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="010ejercicio.php" method="POST">
        <h3>Calculo de las horas extras pagadaas</h3>
        <label for="">Nombre: </label><br>
        <input type="text" name="nombres"><br><p>
        <label for="">Salario basico: </label><br>
        <input type="number" name="salario"><br><p>
        <label for="">Ingrese Horas extras: </label><br>
        <label for="">Diurnas: </label><br>
        <input type="number" name="diurna"><br>
        <label for="">Nocturnas: </label><br>
        <input type="number" name="nocturna"><br><p>

        <input type="submit" name="btn_enviar" value="Ejecutar">
    </form>
</body>

</html>
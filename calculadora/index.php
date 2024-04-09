<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Temperatura</title>
</head>
<body>
    <h1>Calculadora Básica</h1>
    <p>Ingrese los datos "A" y "B":</p>
    <form action="calcu.php" method="post">
    <label for="numero 1">Dato A</label>
    <input type="number" id="numero1" name="numero1">
        <label for="numero 2">Dato B</label>
        <input type="number" id="numero2" name="numero2">
        <br><br>
        Obtener datos de:
        <select name="from">
            <option value="mu">Multiplicación</option>
            <option value="di">Division</option>
            <option value="su">Suma</option>
            <option value="re">Resta</option>
        </select>
        <input type="submit" value="Obtener">
    </form>
</body>
</html>
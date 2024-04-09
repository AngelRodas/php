<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Temperatura</title>
</head>
<body>
    <h1>Área y Perímetro de Figuras</h1>
    <p>Ingrese los datos "A" y "B":</p>
    <form action="a.php" method="post">
    <label for="numero 1">Dato A</label>
    <input type="number" id="numero1" name="numero1">
        <label for="numero 2">Dato B</label>
        <input type="number" id="numero2" name="numero2">
        <br><br>
        Obtener datos de:
        <select name="from">
            <option value="cir">Circulo</option>
            <option value="cua">Cuadro</option>
            <option value="rec">Rectangulo</option>
        </select>
        <input type="submit" value="Obtener">
    </form>
</body>
</html>

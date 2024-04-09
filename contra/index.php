<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Genera una contraseña</h1>
    <p>Ingresa la cantidad de digitos deseados para la contraseña</p>
<form action="contra.php" method="post">
    <label for="longitud">Largo:</label>
    <input type="number" id="longitud" name="longitud" required>
    <input type="submit" value="Crea la Contraseña">
</form>
</body>
</html>
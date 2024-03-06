<!DOCTYPE html>
<html>
<head>
    <title>Formulario PHP y MySQL</title>
</head>
<body>

<h2>Formulario de Ingreso</h2>

<form action="procesar.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje"></textarea><br><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>

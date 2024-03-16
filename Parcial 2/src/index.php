<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL Docker App</title>
</head>
<body>
    <h1>PHP MySQL Docker App</h1>

    <?php
    // Configuración de la conexión a la base de datos
    $servername = "mysql";
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $database = getenv('MYSQL_DATABASE');

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    echo "Conexión exitosa a la base de datos MySQL.";

    // Cerrar conexión
    $conn->close();
    ?>
</body>
</html>

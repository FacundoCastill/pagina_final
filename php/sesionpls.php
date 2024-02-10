<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Usuarios</title>
    <!-- Incluye los estilos de Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Agrega estilos personalizados si es necesario */
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Lista de Usuarios</h2>

    <?php
    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema final 3ro";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para obtener los usuarios
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

    // Verifica si hay resultados
    if ($result->num_rows > 0) {
        // Muestra la tabla
        echo '<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>';

        // Muestra los datos de los usuarios
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row["id"] . '</td>
                    <td>' . $row["nombre"] . '</td>
                    <td>' . $row["email"] . '</td>
                  </tr>';
        }

        echo '</tbody></table>';
    } else {
        echo "No se encontraron usuarios.";
    }

    // Cierra la conexión
    $conn->close();
    ?>

</div>

<!-- Incluye los scripts de Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
<?php
include 'config.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    header("Location: /pagina_final/index.php");
} else {
    echo "Error al registrarse: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
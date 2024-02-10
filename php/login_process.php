<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, username, password FROM usuarios WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $username, $hashed_password);
$stmt->fetch();

if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
    $_SESSION['username'] = $username;
    header("Location: /pagina_final/php/pantalla_sesion.php");
} else {
    echo "Usuario o contraseña incorrectos";
}

$stmt->close();
$conn->close();
?>
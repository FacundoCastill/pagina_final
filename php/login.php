<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_usuario = $_POST['username'];  // Asegúrate de utilizar 'username' en lugar de 'nombre_usuario'
    $password = $_POST['password'];
    $rol = "admin";
    $_SESSION['rol'] = $rol;

    // Después de asignar el rol
    echo "Rol: " . $rol . "<br>";

    // Redirigir a la página correspondiente según el rol usando JavaScript
    echo "<script>alert('Redirigiendo a: " . ($rol == 'admin' ? 'sesionpls.php' : 'pantalla_sesion.php') . "');</script>";
    echo "<script>window.location.href = '" . ($rol == 'admin' ? 'sesionpls.php' : 'pantalla_sesion.php') . "';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Template · Bootstrap v5.3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body>
    <main class="form-signin">
        <form action="login_process.php" method="post">
            <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                <label for="username">Nombre de usuario</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Contraseña</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Recuerdame
                </label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Iniciar</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
include 'db.php';

// Verificar si el usuario está autenticado y tiene el rol de administrador
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New user registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .navbar {
        background-color: #202C4B;
        overflow: hidden;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #575757;
        color: white;
    }

    .navbar .cerrar {
        float: right;
    }

    .navbar .user-info {
            float: right;
            background-color: none;
            color: #f2f2f2;
        }

    .form-container {
        background-color: #fff;
        padding: 2em;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin: 100px auto; /* Ajustar margen para la barra de navegación fija */
    }

    .form-container h2 {
        margin-bottom: 1em;
        text-align: center;
        color: #333;
    }

    .form-container input[type="text"],
    .form-container input[type="password"],
    .form-container select {
        width: 100%;
        padding: 0.5em;
        margin-bottom: 1em;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-container input[type="submit"] {
        width: 100%;
        padding: 0.5em;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 1em;
        cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .user-info {
        color: #f2f2f2;
    }
</style>
</head>
<body>

<div class="navbar">
    <a href="/Sistema de manejo de reputación/dashboard.php">Inicio</a>
    <a href="/Sistema de manejo de reputación/create_note.php">Crear Notas</a>
    <a href="/Sistema de manejo de reputación/login/manage_users.php">Modificar Planes de Usuario</a>
    <a href="/Sistema de manejo de reputación/login/register.php">Registro</a>
    <a href="/Sistema de manejo de reputación/view_reports.php">Colección de Notas</a>
    <a class="cerrar" href="/Sistema de manejo de reputación/login/logout.php">Cerrar Sesión</a>
    <div class="user-info">
        <?php echo "Bienvenido, " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")"; ?>
    </div>
    </div>

<div class="form-container">
    <h2>Registro</h2>
    <form method="post" action="register.php" onsubmit="return validateForm()">
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <select name="role" required>
            <option value="" disabled selected>Selecciona rol</option>
            <option value="admin">Administrador</option>
            <option value="client">Cliente</option>
        </select>
 
        <input type="submit" value="Registrar">
    </form>
</div>

<script>
    function validateForm() {
        const username = document.forms[0].username.value;
        const password = document.forms[0].password.value;
        if (username === "" || password === "") {
            alert("All fields must be filled out");
            return false;
        }
        return true;
    }
</script>

</body>
</html>

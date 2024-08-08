<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Informe</title>
    <style>
       body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #202C4B;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            justify-content: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: none;
            color: white;
        }
        .navbar .user-info {
            float: right;
            background-color: none;
            color: #f2f2f2;
        }
        .navbar.cerrar{

           margin-left: auto;
        }
        .navbar .logout {
            margin-left: auto;
        }
        .user-info {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: right;
        }
        .user-info a {
            color: #ff9900;
            text-decoration: none;
            margin-left: 15px;
        }
        .informe {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .informe h2 {
            text-align: center;
            color: #333;
        }
        .informe form {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .informe form div {
            flex: 1 1 45%;
        }
        .informe form label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .informe form input, .informe form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .informe form textarea {
            resize: vertical;
        }
        .informe form input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            align-self: flex-start;
        }
        .informe form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<script>
    // Ejemplo de animación simple con JavaScript
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.informe').style.opacity = 0;
        setTimeout(function() {
            document.querySelector('.informe').style.transition = 'opacity 1s';
            document.querySelector('.informe').style.opacity = 1;
        }, 100);
    });
</script>
</head>
<body>

<div class="navbar">
    <a href="/login/dashboard.php">Inicio</a>
    <a href="/Sistema de manejo de reputación/create_note.php">Crear Notas</a>
    <a href="/Sistema de manejo de reputación/login/manage_users.php">Modificar Planes de Usuario</a>
    <a href="/Sistema de manejo de reputación/login/register.php">Registro</a>
    <a href="/Sistema de manejo de reputación/view_reports.php">Colección de Notas</a>
    <div class="user-info">
    <?php echo "Bienvenido, " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")"; ?>
    <a class="logout" href="/Sistema de manejo de reputación/login/logout.php">Cerrar Sesión</a>
</div>
</div>

<section class="informe">
    <h2>Agregar Informe</h2>
    <form method="post" action="add_report.php">
        <div>
            <label for="country">País:</label>
            <input type="text" id="country" name="country" required>
        </div>
        <div>
            <label for="date">Fecha:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div>
            <label for="type_media">Tipo de Medio:</label>
            <input type="text" id="type_media" name="type_media" required>
        </div>
        <div>
            <label for="original_headers">Titulares Originales:</label>
            <textarea id="original_headers" name="original_headers"></textarea>
        </div>
        <div>
            <label for="english_headers">Titulares en Inglés:</label>
            <textarea id="english_headers" name="english_headers"></textarea>
        </div>
        <div>
            <label for="author">Autor:</label>
            <input type="text" id="author" name="author">
        </div>
        <div>
            <label for="url">URL:</label>
            <input type="text" id="url" name="url">
        </div>
        <div>
            <label for="url_testigo">URL Testigo:</label>
            <input type="text" id="url_testigo" name="url_testigo">
        </div>
        <div>
            <label for="tier">Tier:</label>
            <input type="text" id="tier" name="tier">
        </div>
        <div>
            <label for="pdf">PDF:</label>
            <input type="text" id="pdf" name="pdf">
        </div>
        <div>
            <label for="notes">Notas:</label>
            <textarea id="notes" name="notes"></textarea>
        </div>
        <div>
            <label for="ad_value_pesos">Valor Publicitario en Pesos:</label>
            <input type="number" step="0.01" id="ad_value_pesos" name="ad_value_pesos">
        </div>
        <div>
            <label for="ad_value_dolares">Valor Publicitario en Dólares:</label>
            <input type="number" step="0.01" id="ad_value_dolares" name="ad_value_dolares">
        </div>
        <div>
            <label for="reach">Alcance:</label>
            <input type="number" id="reach" name="reach">
        </div>
        <div>
            <label for="topic">Tema:</label>
            <input type="text" id="topic" name="topic">
        </div>
        <div>
            <input type="submit" value="Agregar Informe">
        </div>
    </form>
</section>

</body>
</html>

<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'client') {
    header("Location: login.php");
    exit();
}

echo "Welcome, Client!";
?>
<!DOCTYPE html>
<html>
<head>
<title>Sistema</title>
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
        .navbar .cerrar {
            margin-left: auto;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="/Sistema de manejo de reputación/cliente/dashboard_cliente.php">Inicio</a>
    <a href="/Sistema de manejo de reputación/coleccion_notas_cliente.php">Colección de Notas</a>
    <a class="cerrar" href="/Sistema de manejo de reputación/login/logout.php">Cerrar Sesión</a>
    <div class="user-info">
        <?php echo "Bienvenido, " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")"; ?>
    </div>
</div>

<div>
    <h1>Bienvenido al Sistema</h1>
    <p>Usa el menú de navegación para acceder a las diferentes secciones.</p>
</div>

</body>
</html>

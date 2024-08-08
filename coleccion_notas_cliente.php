<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$directory = 'pdf_reports/';
$files = array_diff(scandir($directory), array('..', '.'));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Reportes</title>
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
    <a href="/Sistema de manejo de reputación//cliente/dashboard_cliente.php">Inicio</a>
    <a href="/Sistema de manejo de reputación/coleccion_notas_cliente.php">Colección de Notas</a>
    <a class="cerrar" href="/Sistema de manejo de reputación/login/logout.php">Cerrar Sesión</a>
    <div class="user-info">
        <?php echo "Bienvenido, " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")"; ?>
    </div>
</div>

    <h1>Lista de Reportes PDF</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre del Archivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
                <tr>
                    <td><?php echo $file; ?></td>
                    <td>
                        <a href="<?php echo $directory . $file; ?>" target="_blank">Ver</a> | 
                        <a href="<?php echo $directory . $file; ?>" download>Descargar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

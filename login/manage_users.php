<?php
session_start();
include 'db.php';

// Verifica si el usuario está logueado y si tiene el rol de 'admin'
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: dashboard.php");
    exit();
}

// Manejo de acciones de formulario (eliminar o editar usuarios)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id=$id";
        $conn->query($sql);
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        $new_password = $_POST['new_password'];

        if (!empty($new_password)) {
            // Encripta la nueva contraseña
            $passwordHash = password_hash($new_password, PASSWORD_BCRYPT);
            $sql = "UPDATE users SET username='$username', role='$role', password='$passwordHash' WHERE id=$id";
        } else {
            // No cambies la contraseña
            $sql = "UPDATE users SET username='$username', role='$role' WHERE id=$id";
        }

        $conn->query($sql);
    }
}

// Consulta para obtener todos los usuarios
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Usuarios</title>
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
        .navbar .logout {
            margin-left: auto;
        }

        h2 {
            color: #555;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007bff;
            padding: 8px 16px;
            border-radius: 4px;
        }

        a:hover {
            background-color: #007bff;
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        form input[type="text"],
        form input[type="password"],
        form select,
        form input[type="submit"] {
            margin-right: 10px;
        }

        form input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #218838;
        }

        form input[type="submit"][name="delete"] {
            background-color: #dc3545;
        }

        form input[type="submit"][name="delete"]:hover {
            background-color: #c82333;
        }
    </style>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('input[name="delete"]');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            const confirmDelete = confirm('¿Estás seguro de que quieres eliminar este usuario?');
            if (!confirmDelete) {
                event.preventDefault();
            }
        });
    });
});
    </script>
</head>
<body>

<div class="navbar">
    <div class="nav-links">
        <a href="dashboard.php">Inicio</a>
        <?php if ($_SESSION['role'] == 'admin') { ?>
            <a href="/Sistema de manejo de reputación/create_note.php">Crear Notas</a>
    <a href="/Sistema de manejo de reputación/login/manage_users.php">Modificar Planes de Usuario</a>
    <a href="/Sistema de manejo de reputación/login/register.php">Registro</a>
    <a href="/Sistema de manejo de reputación/view_reports.php">Colección de Notas</a>
        <?php } ?>
    </div>
    <div class="user-info">
        <?php echo "Bienvenido, " . $_SESSION['username'] . " (" . $_SESSION['role'] . ")"; ?>
        <a class="logout" href="logout.php">Cerrar Sesión</a>
    </div>
</div>

<a href="dashboard.php">Volver al Dashboard</a><br>
<h2>Gestionar Usuarios</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre de Usuario</th>
        <th>Rol</th>
        <th>Acción</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['role']; ?></td>
        <td>
            <form method="post" action="manage_users.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="text" name="username" value="<?php echo $row['username']; ?>" required>
                <input type="password" name="new_password" placeholder="Nueva Contraseña">
                <select name="role">
                    <option value="admin" <?php if ($row['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="client" <?php if ($row['role'] == 'client') echo 'selected'; ?>>Client</option>
                </select>
                <input type="submit" name="edit" value="Editar">
                <input type="submit" name="delete" value="Eliminar">
            </form>
        </td>
    </tr>
    <?php } ?>
</table>

<?php
$conn->close();
?>

</body>
</html>

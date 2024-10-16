<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ./login/login.html"); // Redirigir si no está autenticado
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD de Usuarios</h1>
    <a href="logout.php">Cerrar Sesión</a>
    <h2>Crear Usuario</h2>
    <form action="crear.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        
        <label for="phone">telefono:</label>
        <input type="phone" id="phone" name="phone" required><br><br>
        
        <input type="submit" value="Crear Usuario">
    </form>

    <h2>Lista de Usuarios</h2>
    <table >
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "proyecto";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Obtener usuarios
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['email']}</td>
                        <td>
                            <a href='editar.php?id={$row['id']}'>Editar</a> |
                            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay usuarios registrados.</td></tr>";
        }

        // Cerrar conexión
        $conn->close();
        ?>
    </table>
</body>
</html>

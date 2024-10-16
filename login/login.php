<?php
session_start();
$servername = "localhost";
$username = "root"; // Cambia si tienes otro usuario
$password = ""; // Cambia si tienes contraseña
$dbname = "proyecto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Preparar y ejecutar la consulta
$sql = "SELECT * FROM registro WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    
    if ($password == $row['password']) {
        // Autenticación exitosa
        $_SESSION['user_id'] = $row['id'];
        header("Location: ../index.php"); // Redirigir a la página de índice
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "No se encontró el usuario.";
}

// Cerrar conexión
$conn->close();
?>


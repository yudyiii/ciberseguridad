<?php

header("Content-Type: application/json");

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario por defecto en XAMPP
$password = ""; // Contraseña por defecto en XAMPP (normalmente vacía)
$dbname = "proyecto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Error de conexión a la base de datos.']);
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = json_decode(file_get_contents('php://input'), true);

     // Extraer los valores
     $name = isset($data['name']) ? trim($data['name']) : null;
     $password = isset($data['password']) ? trim($data['password']) : null;
     $email = isset($data['email']) ? trim($data['email']) : null;
     $phone = isset($data['phone']) ? trim($data['phone']) : null;
 
     // Validar los datos
     if (empty($name) || empty($password) || empty($email) || empty($phone)) {
         http_response_code(400); // Bad Request
         echo json_encode(['error' => 'Todos los campos son obligatorios.']);
         exit;
     }

     
    $sql = "INSERT INTO registro (nombre, email, telefono, password, rol) VALUES ('$name', '$email','$phone', '$password', '1')";
    
    if ($conn->query($sql) === TRUE) {
        http_response_code(201); // Created
        echo json_encode([
            "status" => "success",
            "message" => "Usuario registrado correctamente",
            "data" => [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "password" => $password
            ]
        ]);
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Error al registrar el usuario.']);
    }

     

    // Cerrar la declaración y la conexión
    $conn->close();
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Método no permitido.']);
}

?>

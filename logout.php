<?php
session_start(); // Iniciar la sesión
session_destroy(); // Destruir la sesión
header("Location: index.html"); // Redirigir a la página de login
exit(); // Terminar el script
?>
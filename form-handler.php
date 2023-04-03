<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos los valores del formulario
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $company = $_POST['company'];
    $email = $_POST['email'];

    // Formateamos el cuerpo del mensaje
    $body = "Nombre: $name\n";
    $body .= "Apellido: $last_name\n";
    $body .= "Empresa: $company\n";
    $body .= "Email: $email\n";

    // Configuramos las cabeceras del correo
    $to = 'marketing@arkondata.com';
    $subject = 'Nuevo formulario de contacto de Arkon Test by Abel Cantu';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviamos el correo
    if (mail($to, $subject, $body, $headers)) {
        echo '¡Gracias por contactarnos!';
    } else {
        echo 'Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.';
    }
}

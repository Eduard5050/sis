<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validar que los campos no estén vacíos
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Configuración del correo electrónico
    $to = "media.insight.monitoring@gmail.com"; // Cambia esta dirección por la tuya
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $email_subject = "Nuevo mensaje de $name: $subject";
    $email_body = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body>
        <h2>Nuevo mensaje de $name</h2>
        <p><strong>Correo:</strong> $email</p>
        <p><strong>Asunto:</strong> $subject</p>
        <p><strong>Mensaje:</strong></p>
        <p>$message</p>
    </body>
    </html>";

    // Enviar correo
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Inténtalo de nuevo más tarde.";
    }
}
?>

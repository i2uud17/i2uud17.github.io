<?php
error_reporting(E_ALL); // Mostrar todos los errores
ini_set('display_errors', 1); // Mostrar errores en pantalla

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Validaciones básicas
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Todos los campos son obligatorios.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'El correo electrónico no es válido.']);
        exit;
    }

    if(preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = 'Phone is invalid';
    }

    // Configura el correo
    $to = "brisa.agenciainmobiliaria@gmail.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name\nCorreo: $email\nTeléfono: $phone\nMensaje: $message";
    $headers = "From: $email";

    // Intenta enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Mensaje enviado correctamente.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Hubo un error al enviar el mensaje.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método de solicitud no válido.']);
}
?>
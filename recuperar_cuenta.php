<?php
require_once 'cdn.html';
require_once 'connect_db.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $sql = "SELECT * FROM login WHERE email = :email";
    $stmt = $cnnPDO->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $login = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($login) {
        $nuevaContrasena = generarContrasenaAleatoria();

        $sql = "UPDATE login SET password = :password WHERE user = :user";
        $stmt = $cnnPDO->prepare($sql);
        $stmt->bindParam(':password', $nuevaContrasena);
        $stmt->bindParam(':user', $login['user']);
        $stmt->execute();

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.office365.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'alo_rm28@outlook.es';
            $mail->Password = '2219Jaal';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('alo_rm28@outlook.es', 'sistema escolar');
            $mail->addAddress($email, $login['user']);

            $mail->Subject = 'Recuperación de contraseña';

            // Agregar frontend al cuerpo del mensaje
            $mail->isHTML(true);
            $mail->Subject = 'Recuperación de contraseña'; // Asunto del correo
            
            // Definimos el contenido HTML del correo
          // ... Your existing PHP code ...

// ... Your existing PHP code ...

// ... Your existing PHP code ...

$mail->Body = '
    <html>
    <head>
        <title>Recuperación de contraseña</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            /* Custom styles */
            .blue-text {
                color: black;
            }
            .blue-card {
                background-color: grey;
                color: white;
            }
        </style>
    </head>
    <body>
        <!-- Contenido de la tarjeta -->
        <div class="card blue-card">
            <img src="academia3/images/logo.PNG" alt="Logo" class="logo">
            <div class="card-body">
                <h1 class="card-title text-secondary">Recuperación de contraseña</h1>
                <p class="card-text">Hola <span class="blue-text">' . $login['user'] . '</span>,</p>
                <p class="card-text">Tu nueva contraseña es: <strong>' . $nuevaContrasena . '</strong></p>
                <p class="card-text">Gracias por utilizar nuestro servicio.</p>
            </div>
        </div>
    </body>
    </html>
';


// ... Rest of your code ...

// ... Rest of your code ...


            $mail->send();

            header("location:login.php");
        } catch (Exception $e) {
            echo 'Ocurrió un error al enviar el correo: ' . $mail->ErrorInfo;
        }
    } else {
       
        echo 'El correo electrónico no está registrado.';
    }
}

function generarContrasenaAleatoria($longitud = 8) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $contrasena = '';
    for ($i = 0; $i < $longitud; $i++) {
        $index = rand(0, strlen($caracteres) - 1);
        $contrasena .= $caracteres[$index];
    }
    return $contrasena;
}
?>

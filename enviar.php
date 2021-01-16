<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento_Id'];
$email = $_POST['email'];
$numero_telefono = $_POST['numero_telefono'];
$habitaciones = $_POST['habitaciones'];
$comentario = $_POST['comentario'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " " . $apellido . "  \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Su número de telefono es: " . $numero_telefono . " \r\n";
$message .= "Mensaje: " . $_POST['comentario'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'roynertortolero1@gmail.com';
$asunto = 'Mensaje de consulta en general';

mail($para, $asunto, utf8_decode($message), $header);

if($email){
echo'<script type="text/javascript">
        alert("Consulta enviada con éxito");
        window.location.href="index.html";
        </script>';
}
?>
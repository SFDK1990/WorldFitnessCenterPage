<?php
//Variables
$name = $_GET["nombre"];
$lastName = $_POST["lastname"];
$mail = $_POST["email"];
$message = $_POST["subject"];

$header = "From: " . $mail . "\r\n";
$header .= "X-Mailer: PHP/ " . phpversion() . "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "From: " . $mail . "\r\n";
$header = "Context-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message = "Apellidos: " . $lastName . "\r\n";
$message = "Mensaje: " . $_POST["message"] . "\r\n";
$message = "Enviado el: " . date("d/m/Y", time());

$para = "asencioscattolodanielgmail.com";
$asunto = "Asunto del mensaje";

mail($para, $asunto, utf8_decode($message), $header);

header("Location:contacto.html");

?>

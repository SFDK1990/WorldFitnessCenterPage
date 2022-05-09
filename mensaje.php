<?php

use PHPMailer\PHPMailer\PHPMailer;

include "Mailer/src/SMTP.php";
include "Mailer/src/Exception.php";
include "Mailer/src/PHPMailer.php";

//Creamos un nuevo objeto mailer

$mail = new PHPMailer();
try {
  //Correo al que se le va a enviar
  $emailTo = "scattolo90@gmail.com";
  $name = $_POST["name"];
  //Asunto
  $subject = $_POST["subject"];
  //Cuerpo
  $bodyEmail = $_POST["subject"];
  //Email d respuesta
  $respuestaEmail = $_POST["email"];

  //Correo puente
  $fromemail = "testproyecto0@gmail.com";
  $fromname = "Daniel Asencio Scattolo";
  $host = "smtp.gmail.com";
  $port = "587";
  $SMTPAuth = "login";
  $SMTPSecure = "tls";
  $Password = "Testproyecto0@";

  $mail->isSMTP();
  $mail->SMTPDebug = 0; //debuguear el mensaje
  $mail->Host = $host;
  $mail->Port = $port;
  $mail->SMTPAuth = $SMTPAuth;
  $mail->SMTPSecure = $SMTPSecure;
  $mail->Username = $fromemail;
  $mail->Password = $Password;

  $mail->setFrom($fromemail, $fromname);
  $mail->addAddress($emailTo);

  //Asunto
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->addReplyTo($respuestaEmail, "Enviado por:");
  //Cuerpo
  $mail->Body = $bodyEmail;
  $mail->addAttachment("img/logaso.jpg");

  //Para usar en HTTPS
  // $mail->SMTPOptions = [
  //   "ssl" => [
  //     "verify_peer" => false,
  //     "verify_peer_name" => false,
  //     "allow_self_signed" => true,
  //   ],
  // ];

  if (!$mail->send()) {
    error_log("Mailer: No se pudo enviar el correo!  ");
    die();
  }
  header("location:exito.html");
  die();
} catch (Exception $e) {
  //throw $th;
}
?>


 ?>
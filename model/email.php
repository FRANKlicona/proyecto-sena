<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Email
{
   public function GenerarEmail($to,$name,$subject,$content){
      $error = null;
      //Sentencia
      try {
         // Load Composer's autoloader
         require_once('vendor/phpmailer/phpmailer/src/PHPMailer.php');
         require_once('vendor/phpmailer/phpmailer/src/Exception.php');
         require_once('vendor/phpmailer/phpmailer/src/SMTP.php');

         $mail = new PHPMailer(true);
         // print_r($data);
         // die;
         try {
            //Nuevo correo electronico.
            $mail = new PHPMailer;
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'balaprendiz@gmail.com';            // SMTP username
            $mail->Password   = 'bienestar-_-3127';                           // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;
            //Caracteres.
            $mail->CharSet = 'UTF-8';

            //De dirección correo electrónico y el nombre
            $mail->setFrom("balaprendiz@gmail.com", 'Bienestar Al Aprendiz');

            //Dirección de envio y nombre.
            $mail->addAddress($to, $name);
            //Dirección a la que responderá destinatario.
            $mail->addReplyTo("balaprendiz@gmail.com", "Bienestar Al Aprendiz");

            //BCC ->  incluir copia oculta de email enviado.
            $mail->addBCC("balaprendiz@gmail.com");

            //Enviar codigo HTML o texto plano.
            $mail->isHTML(true);

            //Titulo email.
            $mail->Subject = $subject;
            $mail->Body = $content;
            $mail->send();
            
         } catch (Exception $error) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }
      } catch (Exception $e) {
         echo $error;
         die($e->getMessage());
      }
   }
} ?>
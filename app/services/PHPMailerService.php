<?php
namespace app\services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerService
{
    private PHPMailer $mailer;

    public function __construct(PHPMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(email $email): bool
    {
        try {
            // تنظیمات سرور
            $this->mailer->isSMTP();
            $this->mailer->Host = 'sandbox.smtp.mailtrap.io';
            $this->mailer->SMTPAuth = true;
            $this->mailer->Port = 2525;
            $this->mailer->Username = '2926a051d9729a';
            $this->mailer->Password = '4351e2e8c4841f';

            // تنظیمات ایمیل
            $this->mailer->setFrom($email->from, $email->fromName);
            $this->mailer->addAddress($email->to);
            $this->mailer->isHTML(true);
            $this->mailer->Subject = $email->subject;
            $this->mailer->Body = $email->body;

            // ارسال ایمیل
            $this->mailer->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}











// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
// $mail->isSMTP();                                            //Send using SMTP
// $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
// $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
// $mail->Username   = 'user@example.com';                     //SMTP username
// $mail->Password   = 'secret';                               //SMTP password
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
// $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

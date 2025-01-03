<?php 
require '../bootstrap/init.php';

use app\services\PHPMailerService;
use app\services\email;
use PHPMailer\PHPMailer\PHPMailer;

$mailer = new PHPMailer();

$phpMailerService = new PHPMailerService($mailer);



if (isset($_POST['reqid']) && $_POST['reqid'] > 0) {

    $request = $requestModel->getByID($_POST['reqid']);
    $user = $userModel->getByID($request->user_id);

    $message = " <html> <head> <style> body { font-family: Arial, sans-serif; background-color: #f9f9f9; color: #333; line-height: 1.6; margin: 0; padding: 0; } .container { max-width: 600px; margin: 20px auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); overflow: hidden; } .header { background: #4caf50; color: #fff; padding: 20px; text-align: center; font-size: 1.5em; } .content { padding: 20px; } .footer { background: #f1f1f1; text-align: center; padding: 10px; font-size: 0.9em; color: #777; } .footer a { color: #4caf50; text-decoration: none; } </style> </head> <body> <div class='container'> <div class='header'> Your Request Has Been Processed! </div> <div class='content'> <p>Hello <b>{$user->username}</b>,</p> <p>Your request has been successfully processed. Thank you for trusting us.</p> <p>If you have any questions, feel free to reach out to our support team.</p> <p>Best regards,</p> <p>The Support Team</p> </div> <div class='footer'> <p>&copy; 2025 Your Company | <a href='http://localhost/Traking-system/'>Visit Our Website</a></p> </div> </div> </body> </html> ";
    // ساخت Email به‌صورت آبجکت
    $email = new email(
        to: "{$user->email}",
        subject: "Hello {$user->username}, Your Request is Complete!",
        body: "{$message}",
        from: 'tracker@gamil.com',
        fromName: 'Bot Tracker'
    );

    // ارسال ایمیل
    $phpMailerService->send($email);


    echo $requestModel->requestToggleStatus($_POST['reqid']);
}

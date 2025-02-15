<?php
// Include Composer's autoloader
require __DIR__ . '/vendor/autoload.php';



// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
class Mailer {
    private $mail;

    public function __construct() {
        $this->mail = new PHPMailer(true);
    }

    public function sendEmail($to, $subject, $body) {
        try {
            // Server settings
            $this->mail->isSMTP();
            $this->mail->Host       = 'smtp.gmail.com';
            $this->mail->SMTPAuth   = true;
            $this->mail->Username   = 'maileryoucode@gmail.com';
            $this->mail->Password   = ''; //this should be the app password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Port       = 587;

            // Recipients   
            $this->mail->setFrom('maileryoucode@gmail.com', 'YouCode');
            $this->mail->addAddress($to);

            // Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;

            // Send the email
            $this->mail->send();
            return ['status' => 'success', 'message' => 'Email has been sent successfully!'];

        } catch (Exception $e) {
            // echo "Email could not be sent. PHPMailer Error: {$this->mail->ErrorInfo}";
            // die("Email could not be sent. PHPMailer Error: {$this->mail->ErrorInfo}");
            return ['status' => 'error', 'message' => "Email could not be sent. PHPMailer Error: {$this->mail->ErrorInfo}"];
        }
    }
}

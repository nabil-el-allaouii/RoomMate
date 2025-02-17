<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();



// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    private $mail;

    public function __construct() {
        $this->mail = new PHPMailer(true);
    }

    public function sendEmail($to, $subject, $body) {
        try {
            // Server settings
            $this->mail->isSMTP();
            $this->mail->Host       = $_ENV['smtp_host'];
            $this->mail->SMTPAuth   = true;
            $this->mail->Username   = $_ENV['smtp_username'];
            $this->mail->Password   = $_ENV['smtp_password'];
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Port       = $_ENV['smtp_port'];

            // Recipients   
            $this->mail->setFrom($_ENV['smtp_username'], 'YouCode');
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

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validacija
    $errors = [];
    if (empty($name)) $errors[] = "Ime i prezime su obavezni.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Unesite ispravan email.";
    if (empty($message)) $errors[] = "Poruka je obavezna.";
    
    if (empty($errors)) {
        $mail = new PHPMailer(true);
        
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '2xlgymbanjole@gmail.com'; // VAŠ GMAIL
            $mail->Password = 'zsik cikd rzjj xxwp'; // APP PASSWORD
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            
            // Recipients
            $mail->setFrom('2xlgymbanjole@gmail.com', '2XL GYM Website');
            $mail->addAddress('2xlgymbanjole@gmail.com', '2XL GYM');
            $mail->addReplyTo($email, $name);
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Nova poruka s web stranice - 2XL GYM';
            
            $mail->Body = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; }
                    .container { max-width: 600px; margin: 0 auto; }
                    .header { background: #e7a53c; color: white; padding: 20px; text-align: center; }
                    .content { padding: 20px; background: #f9f9f9; }
                    .field { margin: 10px 0; }
                    .message { background: white; padding: 15px; border-left: 4px solid #e7a53c; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h1>NOVA PORUKA S WEB STRANICE</h1>
                        <h2>2XL GYM</h2>
                    </div>
                    <div class='content'>
                        <div class='field'><strong>👤 Ime i prezime:</strong> $name</div>
                        <div class='field'><strong>📧 Email:</strong> $email</div>
                        <div class='field'><strong>📞 Telefon:</strong> " . ($phone ? $phone : 'Nije naveden') . "</div>
                        
                        <div class='message'>
                            <strong>💬 Poruka:</strong><br>
                            $message
                        </div>
                    </div>
                </div>
            </body>
            </html>
            ";
            
            // Tekstualna verzija za klijente koji ne podržavaju HTML
            $mail->AltBody = "NOVA PORUKA S WEB STRANICE 2XL GYM\n\nIme: $name\nEmail: $email\nTelefon: " . ($phone ? $phone : 'Nije naveden') . "\n\nPoruka:\n$message";
            
            $mail->send();
            echo json_encode(["success" => true, "message" => "Hvala vam na poruci! Kontaktirat ćemo vas uskoro."]);
            
        } catch (Exception $e) {
            echo json_encode(["success" => false, "message" => "Došlo je do greške: {$mail->ErrorInfo}"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => implode("\n", $errors)]);
    }
}
?>
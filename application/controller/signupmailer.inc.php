<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    // $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'voiceofyouth.ethiopia@gmail.com';                     //SMTP username
    // $mail->Password   = 'voice4youth@ethiopia';                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail-> isSMTP();
    $mail->SMTPAuth= true;
    $mail->SMTPSecure="tls";
    $mail->Host="smtp.gmail.com";
    $mail->Port=587;
    $mail->Username   = 'voiceofyouth.ethiopia@gmail.com';                   //SMTP username
    $mail->Password   = 'voice4youth@ethiopia';

    //Recipients
    $mail->setFrom('voiceofyouth.ethiopia@gmail.com', 'Voice of Youth');
    if(isset($_SESSION["useremail"])) {
        $mail->addAddress($_SESSION["useremail"], $_SESSION["userfullname"]);     //Add a recipient
    }
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Registration to Voice of Youth';
    $mail->Body    = 'You have successfully <b>Registered</b>';
    $mail->AltBody = 'you have successfully registered';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
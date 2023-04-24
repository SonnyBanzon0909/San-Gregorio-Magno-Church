<?php
// admin-responder.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "connect.php";

/// Email

$email = "sangregoriomagnochurch@gmail.com"; 
$name = $_POST['name'];
$age = $_POST['Age'];
$address = $_POST['Address'];
$phone = $_POST['Phone'];
$gender = $_POST['Gender'];
$barangay = $_POST['Barangay'];
$purpose = $_POST['Purpose'];
$message = $_POST['Message'];



//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);





try {

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.parokya-ni-san-gregorio-magno.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admin@parokya-ni-san-gregorio-magno.com';      //SMTP username
    $mail->Password   = 'l)UKks28.Jp67H';                      //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;     

    //Recipients
    $mail->setFrom('admin@parokya-ni-san-gregorio-magno.com', 'San Gregorio Magno');
    $mail->addAddress($email);            //Add a recipient
    $mail->addReplyTo('sangregoriomagnochurch@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'You have a new form submission';

    $name = $_POST['name'];
    $age = $_POST['Age'];
    $address = $_POST['Address'];
    $phone = $_POST['Phone'];
    $gender = $_POST['Gender'];
    $barangay = $_POST['Barangay'];
    $barangay = $_POST['Purpose'];
    $message = $_POST['Message'];

    $mail->Body    = 'Dear Admin,

    You have received a new form submission on your website. The details are as follows:

    Name: '.$name.' <br>
    Age: '.$age.' <br>
    Address: '.$address.' <br>
    Phone: '.$phone.' <br>
    Gender: '.$gender.' <br>
    Barangay: '.$barangay.' <br>
    Parangay: '.$barangay.' <br>
    Message: '.$message.' <br><br>

    Please take a look at the message and respond to the user as soon as possible.
    <br><br>

    Best regards,<br>
    Parokya ni San Gregorio Magno<br><br>
    ';

    $mail->AltBody = 'You have received a new form submission on your website.';

    $mail->send();

    //echo '<script>alert("Message has been sent! \nNote: If you did not receive this email, please check your spam folder.");</script>';





} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



///

?>
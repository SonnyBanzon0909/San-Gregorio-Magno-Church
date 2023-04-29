<?php


// Your reCAPTCHA secret key
$secretKey = "6Leix8olAAAAABdydlg0fA0TaLbIMgSaS17QW3iK";

// Verify reCAPTCHA response
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);

// If reCAPTCHA is not valid
if (!$responseData->success) {
    // Redirect to error page or display error message
    header('Location: error.php');
    exit();
}


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "connect.php";

/// Email




$fullname = $_POST['name'];
$birthday = $_POST['birthday'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$barangay = $_POST['barangay'];
$email = $_POST['email'];
$password = $_POST['password'];



$_SESSION['cr-name'] = $fullname;
$_SESSION['cr-birthday'] = $birthday ;
$_SESSION['cr-contact'] = $contact ;
$_SESSION['cr-address'] = $address;
$_SESSION['cr-barangay'] = $barangay ;
$_SESSION['cr-email'] = $email;
$_SESSION['cr-password'] = $password;
"<script>alert(". $_SESSION['cr-email']  ."+ ' OTP');</script>";



//$_SESSION['user_email'] = $email;
date_default_timezone_set('Asia/Manila');
$date_time = date("Y-m-d h:i:s A"); // A for AM/PM indicator
//Generate OTP
$otp = mt_rand(1000, 9999);
$_SESSION['date_time'] = $date_time;
$_SESSION['otp'] = $otp;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


//insert to temp database
$sql = "INSERT INTO temp_account (email, otp, date_time, verified) VALUES ('$email', '$otp', '$date_time', 'false')";
if(mysqli_query($conn, $sql))
{
    echo "Record added successfully!";
} 
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);




try {

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.parokya-ni-san-gregorio-magno.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noreply@parokya-ni-san-gregorio-magno.com';      //SMTP username
    $mail->Password   = '?CY(eXcQo^;3';//'l)UKks28.Jp67H';                      //SMTP password
    $mail->SMTPSecure =  PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;//465;     
// 
    // $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'sangregoriomagnochurch@gmail.com';      //SMTP username
    // $mail->Password   = 'osntdckzynpsqfwl';                      //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption
    // $mail->Port       = 465; 
// 
                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@parokya-ni-san-gregorio-magno.com', 'San Gregorio Magno');
    $mail->addAddress($email);            //Add a recipient
    $mail->addReplyTo('sangregoriomagnochurch@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your One-Time Password (OTP) - San Gregorio Magno Church';

    $mail->Body    = 'Dear User,<br><br>

    Thank you for using our service. As requested, please find your one-time password (OTP) below:<br><br>

    OTP: ' . $otp . '<br><br>

    This OTP is valid for 5 Minutes and can only be used once. Please enter the OTP code on our website/app to complete the login/sign-up process.<br><br>

    If you did not request an OTP, please ignore this email and contact us immediately if you suspect any unauthorized activity on your account.<br><br>

    Best regards,<br>
    Admin<br>
    Parokya ni San Gregorio Magno<br><br>
    ';

    $mail->AltBody = 'Your OTP is: ' . $otp . '. This OTP is valid for 5 Minutes and can only be used once. Please enter the OTP code on our website/app to complete the login/sign-up process.';

    $mail->send();

    echo '<script>alert("Message has been sent! \nNote: If you did not receive this email, please check your spam folder.");</script>';





} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



///

?>
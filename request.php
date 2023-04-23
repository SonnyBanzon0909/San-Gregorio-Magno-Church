<?php
session_start();
require_once "connect.php";
$user="";

if(isset($_SESSION['user_email'])) 
{
  $email = $_SESSION['user_email'];
  $user = $_SESSION['user_email'];
}
else if(isset($_SESSION['user_email']) && $_SESSION['login_account'] == "true") 
{
  $email = $_SESSION['user_email'];
  $user = $_SESSION['user_email'];
}
else
{
  $email = "";
  $user = "";
}

if($user!="")
{
    date_default_timezone_set('Asia/Manila');
    $date_time = date("Y-m-d"); // A for AM/PM indicator
    $date_time_month = date("F"); // A for AM/PM indicator
    $date_time_year = date("Y"); // A for AM/PM indicator

    $stmt = $conn->prepare("INSERT INTO formdata (name, age, address, phone, gender, barangay, purpose, message, user, date_time, date_time_month, date_time_year, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')");

    if (!$stmt) {
        die('Error in prepare statement: ' . $conn->error);
    }

    $name = $_POST['name'];
    $age = $_POST['Age'];
    $address = $_POST['Address'];
    $phone = $_POST['Phone'];
    $gender = $_POST['Gender'];
    $barangay = $_POST['Barangay'];
    $message = $_POST['Message'];
    $purpose = $_POST['Purpose'];

    $stmt->bind_param("ssssssssssss", $name, $age, $address, $phone, $gender, $barangay, $purpose, $message, $user, $date_time, $date_time_month, $date_time_year);

    if ($stmt->execute()) {
        echo "success";
            //header("Location: index.php?");
    } else {
            //echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
else
{
    //header("Location: index.php?");
}
?>




<?php
  

/// Email




$fullname = $_POST['name'];
$birthday = $_POST['birthday'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$barangay = $_POST['barangay'];
$email = "$_POST['email'];"
$password = $_POST['password'];

 
 
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
    $mail->setFrom('admin@parokya-ni-san-gregorio-magno.com', 'San Gregorio Magno');
    $mail->addAddress('sangregoriomagnochurch@gmail.com');            //Add a recipient
    $mail->addReplyTo('admin@parokya-ni-san-gregorio-magno.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'You have a new email submission';

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

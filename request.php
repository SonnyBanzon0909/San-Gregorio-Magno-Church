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
    $form_email = $_POST['email'];
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



// Start of Email


        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        session_start();
        require_once "connect.php";

/// Email

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
    $mail->addAddress('sangregoriomagnochurch@gmail.com');            //Add a recipient
    $mail->addReplyTo('sangregoriomagnochurch@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'A new form submission from '.$name;


    $name = $_POST['name'];
    $age = $_POST['Age'];
    $address = $_POST['Address'];
    $phone = $_POST['Phone'];
    $gender = $_POST['Gender'];
    $barangay = $_POST['Barangay'];
    $message = $_POST['Message'];
    $purpose = $_POST['Purpose'];


    $mail->Body    = '
    Name: '.$name.'
    Email: '.$form_email.'
    Subject: [Subject of the email]
    Message: [Content of the email]

    We kindly request that you take the necessary steps to respond to this email as soon as possible. Your prompt attention to this matter would be greatly appreciated.

    Thank you for your assistance.

    Best regards,
    [Your name]


    Parokya ni San Gregorio Magno<br><br>
    ';

    //$mail->AltBody = 'Your OTP is: ' . $otp . '. This OTP is valid for 5 Minutes and can only be used once. Please enter the OTP code on our website/app to complete the login/sign-up process.';

    $mail->send();

   // echo '<script>alert("Message has been sent! \nNote: If you did not receive this email, please check your spam folder.");</script>';





} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



///



// END of Email

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

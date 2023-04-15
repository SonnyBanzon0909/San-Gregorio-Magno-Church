<?php

session_start();
require_once "connect.php";


// get form data
$fullname = "";
$fullname = "";
$birthday = "";
$contact = "";
$address = "";
$barangay = "";
$email = "";
$password = "";



$fullname = $_POST['c-fullname'];
$birthday = $_POST['c-birthday'];
$contact = $_POST['c-contact'];
$address = $_POST['c-address'];
$barangay = $_POST['c-barangay'];
$email = $_POST['c-email'];
$password = $_POST['c-password'];

$_SESSION['user_email'] = $email;

$otp="";
$verified = "false";

/// Email



 

//Generate OTP
$otp = mt_rand(100000, 9999);
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

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sangregoriomagnochurch@gmail.com';      //SMTP username
    $mail->Password   = 'qxqhzyckoeeuxxjw';                      //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sangregoriomagnochurch@gmail.com', 'San Gregorio Magno');
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
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }



///


if ($fullname != "" && $birthday != "" && $contact != "" && $address != "" && $barangay != "" && $email != "" && $password != "") 
{


	// insert data into login table
	$sql = "INSERT INTO login (fullname, birthday, contact, address, barangay, email, password,otp,verified)
	VALUES ('$fullname', '$birthday', '$contact', '$address', '$barangay', '$email', '$password', '$otp', '$verified')";

	if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully";
		$_SESSION['created_account'] = "true";

		// Handle login process
		// ...

		// Set cookies if remember me checkbox is checked
		/*	if (isset($_POST['remember']) && $_POST['remember'] == 1) {
			setcookie('email', $_POST['c-email'], time() + (86400 * 30), "/");
			setcookie('password', $_POST['c-password'], time() + (86400 * 30), "/");
		}
		*/

		header("Location: index.php?");

	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}
else
{
	//echo "<script>alert('Please fill up all the fields')</script>";
}


mysqli_close($conn);


?>

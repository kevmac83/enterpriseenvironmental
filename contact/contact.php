<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
$name = stripslashes($_POST['name']);
$courseDays = $_POST['courseCheckbox[]'];
$payment = $_POST['payment'];
$value = $_POST['value'];
$email = trim($_POST['email']);
$company = stripslashes($_POST['company']);
$position = stripslashes($_POST['position']);
$address = stripslashes($_POST['address']);

$subject = $name . " " . $company;

$message = "Name: " . $name . "\r\n" . "Course Days: " . $courseDays . "\r\n" . "Payment type: " . $payment . "\r\n" . "Amount: " . $value . "\r\n" . "Email: " . $email . "\r\n" . "Company: " . $company . "\r\n" . "Position:" . $position . "\r\n" . "Address:" . $address;

$error = '';



if(!$error)
{
$mail = mail(WEBMASTER_EMAIL, $subject, $message,
     "From: EE Website <info@enterpriseenvironmental.com>\r\n"
    ."Reply-To: info@enterpriseenvironmental.com\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
echo 'OK';
}

}


}
?>

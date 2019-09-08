<?php 
//$name = $_POST["name'];
//$email = $_POST['email'];
//$subject = $_POST['subject'];
//$message = $_POST['message'];
//$formcontent=" From: $name \n Message: $message";
//$recipient = "adurajoshua@gmail.com";
//$sub = "Contact Form";
//$mailheader = "From: $email \r\n";
//mail($recipient, $sub,  $formcontent, $mailheader) or die("Error!");
//echo "Thank You!";




$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
  
$headers = "from:" .$name  \n\n .$email;

$mailto ="https://joshua-cv.000webhostapp.com/";
$send_contact = mail ($mailto, $subject, $message, $headers) ;

if($send_contact){
echo "We have received your contact information";
}
else {
echo "ERROR";
}
?>

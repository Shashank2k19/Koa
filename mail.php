<!-- Join Us Form Submission Form  -->
<?php
//get data from form  
$name =     $_POST['name'];
$email=     $_POST['email'];
$contact_number=     $_POST['contact_number'];
$companyname=  $_POST['companyname'];
$city=     $_POST['city'];
$looking_for = $_POST['looking_for'];
$message=    $_POST['message'];

// Email text
$to = "mr.shekhar008@gmail.com";
$subject = "New From Submission on KOA Website ";

$txt =" Name : ". $name . "\r\n Email Id : " . $email . "\r\n Contact Number : " . $contact_number ."\r\n Company Name : " . $companyname . "\r\n City = " . $city .  "\r\n Looking for = " . $looking_for .  "\r\n Message : " . $message;


$headers = "From: noreply@skonlinebook.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:dealer.html");
?>
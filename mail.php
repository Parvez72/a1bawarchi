<?php 
/* @var $name type */
if(isset($_POST["username"])){
$name = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['textarea'];
$formcontent = "From : $name \n email : $email  \n Message : $message";
$recipient = 'support@a1biryani.com';
$subject = 'Message from Website';
$mailheader = "From: $email \r\n";
$captcha = false;

  if(isset($_POST['username']))
  {   
      $message= wordwrap($message);
      if (mail($recipient, $subject, $formcontent, $mailheader)){
      $success="true";
  }
 else {
     $success="false";
  }
echo json_encode($success);
  } 
}
<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
<<<<<<< HEAD
if ($name === ''){
echo "Name cannot be empty.";
die();
}
if ($email === ''){
echo "Email cannot be empty.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email format invalid.";
die();
}
}
if ($subject === ''){
echo "Subject cannot be empty.";
die();
}
if ($message === ''){
echo "Message cannot be empty.";
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "youremail@here.com";
=======

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "tylerwood775@gmail.com";
>>>>>>> 3ace34dd21b32ee58e2437fcf75ded1b5a53a64e
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
<?php
// Define PHP names from form names in the HTML doc
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$enquiry = $_POST['enquiry'];
// Form content
$formcontent = "From: $name ($email) \n Phone Number: $phone \n Subject: $subject \n Message: $enquiry";
// Define recipient
$recipient = "aurorasw@live.com";
$heading = "Holt Racing Contact Form ($name, $subject)";
$mailheader = "From $email \r\n";
mail($recipient, $heading, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
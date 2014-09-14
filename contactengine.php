<?php
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Message = $_POST['message'];
    $From = 'Martin Audio Productions'; 
    $To = 'forest@forestanders.in'; 
    $Subject = 'Hello!';

// prepare email body text
    $Body = "From: $Name\n Email: $Email\n Phone: $Phone\n Message:\n $Message";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// thank you
if ($success){
  echo '<p>Thanks for the message!</p>';
} else { 
	    echo '<p>Bummer! Something went wrong — Try again?</p>'; 
	} 
?>
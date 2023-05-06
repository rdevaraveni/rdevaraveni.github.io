<?php

// Define the email address where you want to receive the form submissions
$to_email = "mailtoraj211@gmail.com";

// Get the form data from the $_POST array
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Build the email message
$email_body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

// Send the email
mail($to_email, "New Message from Contact Form", $email_body);

// Redirect the user to a thank-you page
header("Location: thank-you.html");
exit();

?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Here you can add code to send the email or store the message in a database
// For example, sending an email using PHP's mail function:
$to = 'your@email.com';
$subject = 'New message from website';
$body = "Name: $name\nEmail: $email\nMessage:\n$message";
mail($to, $subject, $body);

// Redirect back to the form page after submission
header('Location: index.html');
exit();
?>
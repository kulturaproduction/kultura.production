<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Construct the message to be saved
$data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

// Path to the text file where you want to save the submissions
$file = 'form_submissions.txt';

// Write the data to the file
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

// Redirect back to the form page after submission
header('Location: index.html');
exit();
?>
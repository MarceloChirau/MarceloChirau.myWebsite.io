<?php
// Add these lines at the top of your PHP script
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    // Define the recipient email address
    $to = "marcelochirau@gmail.com"; // Replace with your email address

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Message body of the email
    $message = "Name: $name\nEmail: $email\n\nComment:\n$comment";

    // Email headers
    $headers = "From: no-reply@yourdomain.com";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $date = htmlspecialchars($_POST['date']);
    $location = htmlspecialchars($_POST['location']);
    $names = htmlspecialchars($_POST['names']);
    $email = htmlspecialchars($_POST['email']);
    $collection = htmlspecialchars($_POST['collection']);
    $comments = htmlspecialchars($_POST['comments']);
    $social = htmlspecialchars($_POST['social']);

    // Define the recipient email address
    $to = "marcelochirau@gmail.com"; // Replace with your email address

    // Subject of the email
    $subject = "New Wedding Inquiry";

    // Message body of the email
    $message = "Date of Wedding: $date\nWedding Location: $location\nNames: $names\nEmail: $email\nCollection: $collection\nComments: $comments\nSocial Account: $social";

    // Email headers
    $headers = "From: no-reply@yourdomain.com";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your inquiry has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add code here to process the form data.
    // For example, you can send an email to your support team with the form data.

    // Replace the following lines with your email sending logic.
    $to = "support@example.com";
    $subject = "Support Request from Google Pay Clone";
    $headers = "From: " . $email;
    $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $messageBody, $headers)) {
        // Successful submission; you can redirect or display a success message.
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        // Handle email sending failure.
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
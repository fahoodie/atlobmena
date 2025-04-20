<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['template-contactform-name']);
    $email = htmlspecialchars($_POST['template-contactform-email']);
    $phone = htmlspecialchars($_POST['template-contactform-phone']);
    $message = htmlspecialchars($_POST['template-contactform-message']);

    $to = "contact@atlob.sa.com"; // Your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
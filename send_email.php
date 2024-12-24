<?php
function sendEmail($email, $name, $date, $time) {
    $subject = "Car Wash Appointment Confirmation";
    $message = "
    Hi $name,

    Thank you for booking your car wash appointment. Below are your booking details:

    Date: $date
    Time: $time

    We look forward to serving you!

    Best regards,
    Car Wash Team
    ";

    // Set the headers
    $headers = "From: no-reply@yourwebsite.com";

    // Send the email
    mail($email, $subject, $message, $headers);
}

// Usage: sendEmail($email, $name, $date, $time);

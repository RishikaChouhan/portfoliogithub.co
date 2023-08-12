<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "rishikachouhan@gmail.com"; // Replace with your email address
    $subject = $_POST["contactSubject"];
    $name = $_POST["contactName"];
    $email = $_POST["contactEmail"];
    $message = $_POST["contactMessage"];

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mailBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    mail($recipient, $subject, $mailBody, $headers);

    echo "success";
}
?>

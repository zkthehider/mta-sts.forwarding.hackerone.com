<?php
$to = "notsoclose8@gmail.com";
$subject = "Test Email from PHP";
$message = "Hello! This is a simple email message.";
$headers = "From: eitherengageordie@gmail.com\r\n";
#$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>

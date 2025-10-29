<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $inquiry  = trim($_POST['inquiry']);
    $message  = trim($_POST['message']);

    $to       = "info@matlalafarming.co.za"; // your email address
    $subject  = "New message from Matlala Farming website";
    $body     = "You have received a new message from your website contact form:\n\n" .
                "Name: $name\n" .
                "Email: $email\n" .
                "Phone: $phone\n" .
                "Inquiry Type: $inquiry\n\n" .
                "Message:\n$message\n";

    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "success";
    } else {
        http_response_code(500);
        echo "error";
    }
}
?>

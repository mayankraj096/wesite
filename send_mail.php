<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mayankraj096@gmail.com"; // Your receiving email
    $subject = "New Contact Form Submission from Meritproglobal";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : 'Not specified';
    $country = htmlspecialchars($_POST['country']);
    $city = htmlspecialchars($_POST['city']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Gender: $gender\n";
    $body .= "Country: $country\n";
    $body .= "City: $city\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: Meritproglobal <no-reply@meritproglobal.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>

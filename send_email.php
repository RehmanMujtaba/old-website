<?php

$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];

$to = "rehmanmujtaba@outlook.com";

$email_subject = "New Contact Form Submission: $subject";

$email_body = "You have received a new message from your website contact form.\n\n" .
              "Name: $name\n" .
              "Email: $email\n" .
              "Subject: $subject\n" .
              "Message: $message\n";

$headers = "From: $email\n" .
           "Reply-To: $email\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $email_subject, $email_body, $headers)) {
  header("Location: thank-you.html");
} else {
  header("Location: error.html");
}

?>

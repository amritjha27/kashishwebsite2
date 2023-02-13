<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "your-email-address@example.com";
  $subject = "New Contact Form Submission";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $body = "<html><body>";
  $body .= "<h2>New Contact Form Submission</h2>";
  $body .= "<p><strong>Name:</strong> $name</p>";
  $body .= "<p><strong>Email:</strong> $email</p>";
  $body .= "<p><strong>Message:</strong> $message</p>";
  $body .= "</body></html>";

  if (mail($to, $subject, $body, $headers)) {
    $response = "Your message was sent successfully!";
  } else {
    $response = "There was an error sending your message. Please try again.";
  }

  echo $response;
}

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = "sufiyaan.s2024@gmail.com"; // Replace with your email address
    $subject = "New Message from Contact Form";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message:\n" . $message . "\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
      echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
  } else {
      echo "<script>alert('Failed to send message.'); window.location.href='index.html';</script>";
  }
}
?>

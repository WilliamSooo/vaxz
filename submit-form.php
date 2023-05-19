<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'williamaiwanta@gmail.com';
  $subject = 'New Contact Form Submission';
  $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  if (mail($to, $subject, $body, $headers)) {
    echo '<p>Your message has been sent. Thank you!</p>';
  } else {
    echo '<p>Sorry, there was a problem sending your message. Please try again later.</p>';
  }
}
?>




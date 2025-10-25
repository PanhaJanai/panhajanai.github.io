<?php

  $time = $_POST['time'] ?? 'N/A';
  $people = $_POST['people'] ?? 'N/A';
  $userMessage = $_POST['message'] ?? '';
  $email = $_POST['email'] ?? '';

  $time = trim($time);

  $parts = explode(':', $time);
  $hour = $parts[0]; // "7"

  $am_pm = '';
  if ($hour >= 12) {
    $am_pm = 'PM';
  } else {
    $am_pm = 'AM';
  }

  $hour = (int)$hour;

  $to = "booking@whitecoffeeandeatery.com";
  $subject = "$time $am_pm Booking Request for $people\n";

  $message = "$time Booking Request for $people\n";
  $message .= "$userMessage\n";
  $message .= "From: $email";
  
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "✅ Email sent!";
  } else {
    echo "❌ Failed to send.";
  }
?>

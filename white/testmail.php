<?php
$to = "test@whitecoffeeandeatery.com";
$subject = "Test Email";
$message = "If you see this, your local mail setup works!";
$headers = "From: admin@whitecoffeeandeatery.com";

if (mail($to, $subject, $message, $headers)) {
  echo "✅ Email sent!";
} else {
  echo "❌ Failed to send.";
}
?>

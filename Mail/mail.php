<?php
$to =  'ritiksah99344@gmail.com';
$subject = 'Test Email';
$message = 'Hlw ritik its me satyam';
$headers = 'From: satyamjiyadav12345@gmail.com'."\r\n";
           'Reply-To: satyamjiyadav12345@gmail.com'."\r\n".
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {    echo 'Failed to send email.';
}
?>

<!-- paras13upadhyay@gmail.com -->
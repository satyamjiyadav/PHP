<?php
// Example: List of users (In real applications, fetch from a database)
$users = [
    ['email' => 'ritiksah99344@gmail.com', 'name' => 'Ritik', 'last_meal_date' => '2024-12-01'],
    ['email' => 'satyamjiyadav12345@gmail.com', 'name' => 'Satyam', 'last_meal_date' => '2024-11-30'],
];

foreach ($users as $user) {
    $lastMealDate = strtotime($user['last_meal_date']);
    $currentDate = strtotime(date('Y-m-d'));

    // Check if the user hasn't logged meals for 2 days
    if (($currentDate - $lastMealDate) >= (2 * 24 * 60 * 60)) {
        $to = $user['email'];
        $subject = 'Fitness Challenge Reminder';
        $message = "Hello " . $user['name'] . ",\n\nIt looks like you haven’t logged any meals for the past two days.\n" .
                   "Please log your meals today to stay on track with your fitness goals!\n\n" .
                   "Stay healthy and keep moving!\n" .
                   "Best regards,\nFitness Challenge Team";
        
        $headers = 'From: no-reply@fitnesschallenge.com' . "\r\n" .
                   'Reply-To: support@fitnesschallenge.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        
        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo 'Reminder email sent to ' . $user['name'] . " (" . $to . ")<br>";
        } else {
            echo 'Failed to send email to ' . $user['name'] . " (" . $to . ")<br>";
        }
    }
}
?>

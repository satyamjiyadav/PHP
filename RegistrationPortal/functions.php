<?php
function sendWelcomeEmail($email, $username) {
    $subject = "Welcome to Gardening Community!";
    $message = "Hi $username,\n\nWelcome to the Gardening Community portal! We're excited to have you here.\n\nHappy Gardening!";
    $headers = "From: no-reply@gardeningportal.com";
    mail($email, $subject, $message, $headers);
}

function isAccountLocked($lockout_time) {
    if ($lockout_time) {
        $unlock_time = strtotime($lockout_time) + (15 * 60);
        return time() < $unlock_time;
    }
    return false;
}
?>

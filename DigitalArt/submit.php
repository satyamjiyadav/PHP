<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $artTitle = $_POST['art_title'];
    $artFile = $_FILES['art_file'];

    // Validation flags
    $errors = [];

    // 1. Validate Full Name (Alphabetic only)
    if (!preg_match("/^[a-zA-Z ]+$/", $fullName)) {
        $errors[] = "Full Name must contain only alphabetic characters and spaces.";
    }

    // 2. Validate Art Title (max 100 characters)
    if (strlen($artTitle) > 100) {
        $errors[] = "Art Title should not exceed 100 characters.";
    }

    // 3. Validate File Upload
    if ($artFile['error'] === 0) {
        $allowedTypes = ['image/png', 'image/jpeg', 'image/gif'];
        $fileType = mime_content_type($artFile['tmp_name']);
        $fileSize = $artFile['size'];
        $maxSize = 2 * 1024 * 1024; // 2 MB

        if (!in_array($fileType, $allowedTypes)) {
            $errors[] = "Only PNG, JPEG, and GIF files are allowed.";
        }

        if ($fileSize > $maxSize) {
            $errors[] = "File size must not exceed 2 MB.";
        }
    } else {
        $errors[] = "There was an error uploading the file.";
    }

    // Check for validation errors
    if (empty($errors)) {
        // Save the uploaded file to the server
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = uniqid() . "_" . basename($artFile['name']);
        $uploadPath = $uploadDir . $fileName;

        if (move_uploaded_file($artFile['tmp_name'], $uploadPath)) {
            echo "Submission successful!<br>";
            echo "Name: " . htmlspecialchars($fullName) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
            echo "Art Title: " . htmlspecialchars($artTitle) . "<br>";
            echo "Uploaded File: <a href='$uploadPath'>$fileName</a><br>";
        } else {
            echo "Failed to save the uploaded file.";
        }
    } else {
        // Display validation errors
        echo "Submission failed due to the following errors:<br>";
        foreach ($errors as $error) {
            echo "- " . htmlspecialchars($error) . "<br>";
        }
    }
}
?>

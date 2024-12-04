<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Art Submission Form</title>
</head>
<body>
    <h2>Digital Art Submission Form</h2>
    <form method="POST" action="submit.php" enctype="multipart/form-data">
        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="full_name" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="art_title">Art Title:</label><br>
        <input type="text" id="art_title" name="art_title" maxlength="100" required><br><br>

        <label for="art_file">Upload Art File (PNG, JPEG, GIF):</label><br>
        <input type="file" id="art_file" name="art_file" accept="image/png, image/jpeg, image/gif" required><br><br>

        <button type="submit">Submit Artwork</button>
    </form>
</body>
</html>

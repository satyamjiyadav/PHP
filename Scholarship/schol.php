<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Application Form</title>
</head>
<body>
    <h1>Scholarship Application Form</h1>
    <form method="POST" action="">
        <label for="fullName">Full Name:</label><br>
        <input type="text" id="fullName" name="fullName" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="cgpa">CGPA:</label><br>
        <input type="text" id="cgpa" name="cgpa"><br><br>
        
        <label for="scholarshipType">Scholarship Type:</label><br>
        <select id="scholarshipType" name="scholarshipType" required>
            <option value="merit">Merit-based</option>
            <option value="need">Need-based</option>
            <option value="athletic">Athletic</option>
        </select><br><br>

        <div id="incomeField" style="display:none;">
            <label for="income">Annual Family Income (INR):</label><br>
            <input type="text" id="income" name="income"><br><br>
        </div>

        <button type="submit">Submit Application</button>
    </form>

    <?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $cgpa = $_POST["cgpa"];
        $scholarshipType = $_POST["scholarshipType"];
        $income = isset($_POST["income"]) ? $_POST["income"] : "";

        // Validation based on scholarship type
        $errors = [];

        // Merit-based validation: CGPA must be greater than 3.5
        if ($scholarshipType == "merit" && $cgpa <= 3.5) {
            $errors[] = "For Merit-based scholarship, CGPA must be greater than 3.5.";
        }

        // Need-based validation: No CGPA validation but income validation
        if ($scholarshipType == "need") {
            if (!is_numeric($income) || $income > 50000) {
                $errors[] = "For Need-based scholarship, annual income must be numeric and less than INR 50,000.";
            }
        }

        // Display errors if any
        if (count($errors) > 0) {
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>" . $error . "</li>";
            }
            echo "</ul>";
        } else {
            // Success message if no validation errors
            echo "Your scholarship application has been submitted successfully!";
            // You can also store the application data in a database here
        }
    }
    ?>
    
    <script>
        // Dynamically show the income field based on scholarship type
        document.getElementById('scholarshipType').addEventListener('change', function() {
            var scholarshipType = this.value;
            var incomeField = document.getElementById('incomeField');
            
            if (scholarshipType == 'need') {
                incomeField.style.display = 'block';
            } else {
                incomeField.style.display = 'none';
            }
        });
    </script>
</body>
</html>

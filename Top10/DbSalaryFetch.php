<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "company"; // The name of the database to be created

// Create a connection to MySQL server
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database '$dbname' created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the created database
$conn->select_db($dbname);

// Create the staff table if it doesn't exist
$table_sql = "
    CREATE TABLE IF NOT EXISTS staff (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        department VARCHAR(50) NOT NULL,
        salary DECIMAL(10, 2) NOT NULL
    )
";
if ($conn->query($table_sql) === TRUE) {
    echo "Table 'staff' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert sample data into the staff table
$insert_sql = "
    INSERT INTO staff (name, department, salary) VALUES
    ('John', 'Sales', 4500),
    ('Alice', 'Sales', 4200),
    ('Mark', 'Sales', 5000),
    ('Jane', 'HR', 3000),
    ('Bob', 'Sales', 3900)
";
if ($conn->query($insert_sql) === TRUE) {
    echo "Sample data inserted into 'staff' table.<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

// Fetch employee data based on given conditions (Sales department and salary > 4000)
$sql = "
    SELECT department, COUNT(*) AS total_employees, GROUP_CONCAT(name ORDER BY salary ASC) AS employee_list
    FROM staff
    WHERE department = 'Sales' AND salary > 4000
    GROUP BY department
    ORDER BY salary ASC
";

// Execute the query and display results
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display results
    while ($row = $result->fetch_assoc()) {
        echo "<br>Department: " . $row["department"] . "<br>";
        echo "Total Employees: " . $row["total_employees"] . "<br>";
        echo "Employee List (sorted by salary): " . $row["employee_list"] . "<br>";
        echo "-----------------------------<br>";
    }
} else {
    echo "No records found matching the criteria.<br>";
}

// Close the connection
$conn->close();
?>
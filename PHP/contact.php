<?php
include("../database.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["Email"];
    $message = $_POST["Messege"];

    // Validate and sanitize input data (you should enhance this)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($message);

    // Insert data into the database table
    $sql = "INSERT INTO messages (email, message) VALUES ('$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();

?>
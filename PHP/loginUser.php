<?php
include('../database.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and sanitize input data (you should enhance this)
    $email = mysqli_real_escape_string($conn, $email);

    // Check if the user exists in the database
    $sql = "SELECT * FROM `logindata` WHERE UserEmail = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check password
        $row = $result->fetch_assoc();

        if ($password == $row['UserPassword']) {
            echo "Login successful! Welcome, " . $row["fullName"];
            echo "SignUp Success";
            setcookie("user", $email , time() + 86400, "/");
            header("Location: ../Pages/index.php");
            // Redirect or perform other actions after successful login
        } else {
            echo "Invalid password. Please try again.";
        }
    } else {
        echo "User not found. Please check your email or register.";
    }
}

// Close connection
$conn->close();
?>
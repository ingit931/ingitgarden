<?php
// Check if the form is submitted
include('../database.php'); // Adjust the path based on your project structure

// Assuming $conn is defined in database.php, make sure it establishes a connection
if ($conn && !$conn->connect_error) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve input values from the form
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Add your validation and authentication logic here
        // For simplicity, let's just check if the email and password are not empty
        if (!empty($email) && !empty($password)) {
            // Add your authentication logic here, such as checking against a database
            // If authentication is successful, you can redirect the user to another page
            // For demonstration purposes, let's just display a success message

            $InsertQuery = "INSERT INTO `logindata` (`UserName`, `UserEmail`, `UserPassword`) VALUES ('$fullName', '$email', '$password')";

            if ($Check = mysqli_query($conn, $InsertQuery)) {
                echo "SignUp Success";
                setcookie("user", $fullName , time() + 86400, "/");
                header("Location: ../Pages/index.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            ;
            
            if ($Check) {
                echo "SignUp Success";
                // header("Location: ../Pages/index.php");
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Invalid email or password. Please try again.";
        }
    }
} else {
    echo "Error: Failed to connect to the database. " . $conn->connect_error;
}
?>

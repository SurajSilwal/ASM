<?php
// Check if the form is submitted for user registration
if (isset($_POST['register'])) {
    // Validate the input fields (you can add more validation as per your requirements)
    $role = $_POST['role'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform necessary sanitization and validation on $role, $name, $email, and $password here

    // Database connection code (you need to set up your database connection here)
    $conn = mysqli_connect("localhost", "root", "", "php");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the email is already registered
    $check_email_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_email_query);
    if (mysqli_num_rows($result) > 0) {
        echo "Email already registered. Please use a different email.";
        exit();
    }
    
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert the user data into the 'users' table
    $insert_user_query = "INSERT INTO users (role, name, email, password) VALUES ('$role', '$name', '$email', '$hashed_password')";

    if (mysqli_query($conn, $insert_user_query)) {
        echo "Registration successful! You can now log in.";
    } else {
        echo "Error during registration: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
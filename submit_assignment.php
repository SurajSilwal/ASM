<?php
// Check if the form is submitted for assignment submission
if (isset($_POST['submit_assignment'])) {
    // Validate the input fields (you can add more validation as per your requirements)
    $assignment_id = $_POST['assignment_id'];
    $submission = $_POST['submission'];

    // Perform necessary sanitization and validation on $assignment_id and $submission here

    // If the input is valid, proceed with assignment submission
    // Assume the student is logged in, and we have their ID in the session variable $_SESSION['user_id']
    $student_id = $_SESSION['user_id'];

    // Database connection code (you need to set up your database connection here)
    $conn = mysqli_connect("localhost", "root", "", "php");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the assignment submission into the 'assignment_submissions' table
    $sql = "INSERT INTO assignment_submissions (assignment_id, student_id, submission) VALUES ('$assignment_id', '$student_id', '$submission')";

    if (mysqli_query($conn, $sql)) {
        echo "Assignment submitted successfully!";
    } else {
        echo "Error submitting assignment: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

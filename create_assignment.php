<?php
// Check if the form is submitted for assignment creation
if (isset($_POST['create_assignment'])) {
    $title = $_POST['title'];
    $description = $_POST['description']
    $staff_id = $_SESSION['user_id'];

    $conn = mysqli_connect("localhost", "root", "", "php");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the assignment into the 'assignments' table
    $sql = "INSERT INTO assignments (staff_id, title, description) VALUES ('$staff_id', '$title', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "Assignment created successfully!";
    } else {
        echo "Error creating assignment: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

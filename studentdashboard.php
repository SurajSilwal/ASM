<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>
    <h2>Assignments</h2>
            <?php
            // Assuming you have already established a database connection, include the necessary connection parameters.
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'php';
            
            // Create a database connection
            $conn = mysqli_connect($host, $username, $password, $database);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // Fetch student assignments from the database
            $sql = "SELECT * FROM assignments";
            $result = mysqli_query($conn, $sql);
            
            // Check if there are any assignments
            if (mysqli_num_rows($result) > 0) {
                // Loop through each assignment and display them
                while ($row = mysqli_fetch_assoc($result)) {
                    $assignment_id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $created_at = $row['created_at'];
            
                    // Display the assignment details
                    echo "<h2>Assignment: $title</h2>";
                    echo "<p>Description: $description</p>";
                    echo "<p>Created At: $created_at</p>";
                    // You can add more details as per your database schema
            
                    // If you want to display student submissions and feedback, you can fetch them here as well
                }
            } else {
                echo "No assignments found.";
            }
            
            // Close the database connection
            mysqli_close($conn);
            ?>


    <h2>Submit Assignment</h2>
    <form method="post" action="submit_assignment.php">
        <label>
            Assignment ID:
            <input type="number" name="assignment_id" required>
        </label><br>
        <label>
            Submission:
            <textarea name="submission" required></textarea>
        </label><br>
        <input type="submit" name="submit_assignment" value="Submit Assignment">
    </form>


</body>
</html>

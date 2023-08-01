<!DOCTYPE html>
<html>
<head>
    <title>Staff Dashboard</title>
</head>
<body>
    <h2>Assignments</h2>
    <?php
    // Display assignments for staff
    // Implement the code to fetch and display staff assignments from the database
    ?>

    <h2>Create Assignment</h2>
    <form method="post" action="create_assignment.php">
        <label>
            Title:
            <input type="text" name="title" required>
        </label><br>
        <label>
            Description:
            <textarea name="description" required></textarea>
        </label><br>
        <input type="submit" name="create_assignment" value="Create Assignment">
    </form>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <?php include('header.php'); ?>

    <h2>Register</h2>
    <form method="post" action="register_action.php">
        <label>
            Role:
            <select name="role">
                <option value="staff">Staff</option>
                <option value="student">Student</option>
            </select>
        </label><br>
        <label>
            Name:
            <input type="text" name="name" required>
        </label><br>
        <label>
            Email:
            <input type="email" name="email" required>
        </label><br>
        <label>
            Password:
            <input type="password" name="password" required>
        </label><br>
        <input type="submit" name="register" value="Register">
    </form>

</body>
</html>

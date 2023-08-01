<!DOCTYPE html>
<html>
<head>
    <title>Assignment Feedback Application</title>
</head>
<body>
    <?php include('header.php'); ?>

    <?php
    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        include('dashboard.php');
    } else {
        include('login.php');
    }
    ?>

    <?php include('footer.php'); ?>
</body>
</html>

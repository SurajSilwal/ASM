<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<header>
    <?php if (isset($_SESSION['user_id'])) : ?>
        <p>Welcome, <?php echo $_SESSION['user_name']; ?>! (<a href="logout.php">Logout</a>)</p>
    <?php else : ?>
        <p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
    <?php endif; ?>
</header>

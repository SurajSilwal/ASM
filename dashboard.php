<?php
// Check if the user is staff or student
if ($_SESSION['user_role'] == 'staff') {
    include('staffdashboard.php');
} else {
    include('studentdashboard.php');
}
?>

<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['email'])) {
    // If logged in, destroy the session
    session_destroy();
    
    // Redirect to a login page or any other desired page
    header("Location: login.php");
    exit();
} else {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

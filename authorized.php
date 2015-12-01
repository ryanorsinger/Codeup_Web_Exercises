<?php

require_once '../Input.php';
require_once '../Auth.php';

// Start the session (or resume an existing one)
session_start();

if (!Auth::check()) {
    header('Location:/login.php');
    exit();
} else {
    $username = Auth::user();
}

?>
<html>
<head>
    <title>Authorized, yo</title>
</head>
<body>
    <h2>Welcome <?= $username ?></h2>
    <h3>You're authorized, yo</h3>
    <a href="logout.php">Logout</a>

</body>
</html>

<?php

require_once '../Auth.php';
session_start();

Auth::logout();
header('Location:/login.php');
exit();


?>
<html>
<head>
    <title>Logout</title>
</head>
<body>
    <h1>Logging you out, yo!</h1>
</body>
</html>

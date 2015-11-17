<?php

$message = isset($_POST['message']) ? $_POST['message'] : '';

?>
<html>
<head>
    <title></title>
</head>
<body>
    <h1><?= htmlspecialchars(strip_tags($message))) ?></h1>

    <form method="POST" action="htmltags.php">

        <input type="text" name="message" placeholder="guestbook message">
    </form>
</body>
</html>

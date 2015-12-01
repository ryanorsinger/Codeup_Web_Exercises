<?php
    var_dump($_GET);

    if(isset($_GET['count'])) {
        $count = $_GET['count'];
    } else {
        $count = 0;
    }
?>

<html>
<head>
    <title>GET Requests</title>
</head>
<body>
    <h1><?= $count ?></h1>
    <h1><a href="?count=<?= $count + 1; ?>">UP</a></h1>
    <h1><a href="?count=<?= $count - 1; ?>">DOWN</a></h1>


</body>
</html>

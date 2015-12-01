<?php

var_dump($_GET);

function pageController()
{
    $data = [];

    $data['count'] = isset($_GET['count']) ? $_GET['count'] : 0;

    return $data;
}

extract(pageController());

?>

<html>
<head>
    <title>GET Requests</title>
</head>
<body>
    <h1><?= $count ?></h1>

    <button><a href="?count=<?= $count + 1; ?>">UP</a></button>
    <button><a href="?count=<?= $count - 1; ?>">DOWN</a></button>

</body>
</html>

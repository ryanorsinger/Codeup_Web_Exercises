<?php

function pageController()
{
    $counter = isset($_GET['counter']) ? $_GET['counter'] : 0;

    $data = [
        'counter' => $counter
    ];

    return $data;
}

extract(pageController());

?>
<html>
<head>
    <title>Counter</title>
</head>
<body>
    <h2><?= $counter ?></h2>

    <a href="counter.php?counter=<?= $counter+1 ?>">Up</a>
    <a href="counter.php?counter=<?= $counter-1 ?>">Down</a>

</body>
</html>

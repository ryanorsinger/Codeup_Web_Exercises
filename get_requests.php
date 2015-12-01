<?php
    var_dump($_GET);

    if(!empty($_GET)) {

    }

    if(isset($_GET['counter'])) {

    }
?>

<html>
<head>
    <title>GET Requests</title>
</head>
<body>
    <h1><a href="?direction=up&count="><?= $count; ?>UP</a></h1>
    <h1><a href="?direction=down&count=<?= $count; ?>"><?= $count; ?>DOWN</a></h1>


</body>
</html>

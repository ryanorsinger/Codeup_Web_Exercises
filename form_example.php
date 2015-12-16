<?php
/*
 *
 * <script>alert('attacked');</script>
 */

$inputs = $_POST;

foreach($inputs as $key => $input) {
   $inputs[$key] = htmlspecialchars(strip_tags($input));
}


var_dump($inputs);


?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="row">
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-6">.col-md-6</div>
    </div>
</body>
</html>

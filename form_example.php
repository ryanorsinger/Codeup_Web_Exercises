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
</head>
<body>
    <form method="POST" action="form_results.php">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Number</label>
        <input type="text" name="number"><br>
        <input type="submit">
    </form>
</body>
</html>

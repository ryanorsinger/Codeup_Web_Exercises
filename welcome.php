<?php
    var_dump($_GET);
    var_dump($_POST);
?>

<html>
<head>
    <title></title>
</head>
<body>
    <form action="welcome.php" method="POST">
        <label for="username">Username
            <input type="text" name="username" id="username">
        </label>
        <label for="password">password
            <input type="text" name="password" id="password">
        </label>

        <label for="favorite_fruit">Favorite Fruit</label>
        <select id="favorite_fruit" name="favorite_fruit[]" multiple>
            <option disabled selected>Select your favorite one</option>
            <option>Apple</option>
            <option>Banana</option>
            <option>Orange</option>
            <option>Durium</option>
        </select>

        <input type="submit">
    </form>

</body>
</html>

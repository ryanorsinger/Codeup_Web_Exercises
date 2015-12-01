<?php

var_dump($_REQUEST);

function inputHas($key)
{
    if (isset($_REQUEST[$key])) {
        return true;
    } else {
        return false;
    }
}



function inputGet($key)
{
    if(isset($_REQUEST[$key])) {
        return $_REQUEST[$key];
    } else {
        return null;
    }
}

function escape($input)
{
    return strip_tags(htmlspecialchars($input));
}

?>
<html>
<head>
    <title></title>
</head>
<body>
    <? if(inputHas('date')): ?>
        <h1>DATE is in the $_REQUEST and its value is <?= inputGet('date'); ?></h1>
    <? endif; ?>
</body>
</html>

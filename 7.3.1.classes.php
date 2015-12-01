<?php

class User
{

    public $username;
    public $password;
    public $isAdministrator;

    public function __construct()
    {

    }

    public function editOtherUser()
    {
        if($this->isAdministrator == true) {
            // code to modify other users in the db
        } else
            return "non-administrators cannot edit other users";

    }

    public function tryLogin()
    {


    }

    public function logout()
    {

    }
}

$user = new User();



?>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
    </form>
</body>
</html>

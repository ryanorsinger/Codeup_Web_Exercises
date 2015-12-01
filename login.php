<?php
    require_once '../Input.php';
    require_once '../Auth.php';

    // Start the session (or resume an existing one)
    session_start();

    if(Input::has('password') && Input::has('username')) {
        $username = Input::get('username');
        $password = Input::get('password');

        Auth::attempt($username, $password);
    }

    // If user is already logged in, redirect to the authorized.php page.
    if(Auth::check()) {
        header('Location:/authorized.php');
        exit();
    }

?>
<html>
    <head>
        <title>Login POST Exercise</title>
    </head>
    <body>

        <h3>Login POST Exercise</h3>
        <form action="login.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="Username" autofocus>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </body>
</html>

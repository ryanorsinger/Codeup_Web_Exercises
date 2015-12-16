<?php

require_once 'Input.php';
require_once 'Log.php';
require_once 'User.php';

class Auth
{

    public static function attempt($username, $password)
    {
        $log = new Log();

        $user = User::findUserByUsername($username);

        if($username == $user->username && password_verify($password, $user->password)) {
            $_SESSION['LOGGED_IN_USER'] = $username;

            $log->info("$username logged in successfully");
            return true;
        } else {
            $log->error("$username failed to login");
            return false;
        }
    }

    public static function check()
    {
        return isset($_SESSION['LOGGED_IN_USER']);
    }

    public static function user()
    {
        return (isset($_SESSION['LOGGED_IN_USER'])) ? $_SESSION['LOGGED_IN_USER'] : null;
    }

    public static function logout()
    {
        // Unset all of the session variables.
        $_SESSION = [];

        // If it's desired to kill the session, also delete the session cookie.
        // Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Finally, destroy the session.
        session_destroy();
    }

}




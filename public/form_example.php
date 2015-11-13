<!doctype html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <h1>GET</h1>

    <h1>POST</h1>


    <form method="POST" action="/form_example.php">
        <p>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="input your username" required autofocus>
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
        </p>
        <p>
            <button type="submit">Log In Now!</button>
        </p>
    </form>
</body>

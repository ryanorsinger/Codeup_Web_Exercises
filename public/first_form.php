<!doctype html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <hr>
    <section class="forms">
        <article class="login">
            <h3>Login Form</h3>
            <form action="/first_form.php" method="POST">
                    <label for="username">Username &amp; </label>
                    <input type="text" id="username" name="username" placeholder="username">

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="password">
                <button type="submit">Login</button>
            </form>
        </article>
        <hr>
        <article class="email">
            <h3>Compose an email</h3>
            <form action="/my_first_form.php" method="POST">
                <p>
                    <label for="email_sender">From:</label>
                    <input type="text" id="email_sender" name="email_sender" placeholder="From:">
                </p>
                <p>
                    <label for="email_recipient">To:</label>
                    <input type="text" id="email_recipient" name="email_recipient" placeholder="To:">
                </p>
                <p>
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder="password">
                </p>
                <p>
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                </p>
                <p>
                    <textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Email message goes here"></textarea>
                </p>
                <button type="submit">Send email</button>
            </form>
        </article>

    </section>
    <section class="output">
        <h1>GET</h1>
        <?php var_dump($_GET); ?>

        <h1>POST</h1>
        <?php var_dump($_POST); ?>
    </section>
</body>
</html>

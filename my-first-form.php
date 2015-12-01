<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<html>
<head>
    <title>My First Form</title>
</head>
<body>

    <a href="my-first-form.php">My first form</a>

    <form method="POST" action="/my-first-form.php">
        <p>
            <label for="recipient">To: </label>
            <input type="text" id="recipient" name="recipient" autofocus required>
        </p>
        <p>
            <label for="sender">From: </label>
            <input type="text" id="sender" name="sender">
        </p>
        <label for="mailing_list">
            <input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
            <label for="mailing_list">Save a copy in your sent folder</label>
        </label>

        <p>Select your favorite hobby or hobbies</p>
            <label><input type="checkbox" name="hobbies[]" value="calculating_primes"> Calculating Prime Numbers</label>
            <label><input type="checkbox" name="hobbies[]" value="coding"> Coding</label>
            <label><input type="checkbox" name="hobbies[]" value="guitar"> Playing guitar</label>
            <label><input type="checkbox" name="hobbies[]" value="front_end_design">Front End Design</label>
            <label><input type="checkbox" name="hobbies[]" value="JavaScript">JavaScript</label>
        </p>
        <p>
            <label for="survey_question1">Why do you want to program?</label>
            <input id="survey_question1" name="reason" type="text">
        </p>
        <p>
        <textarea id="email_body" name="email_body" rows="15" cols="70">Default Text Area</textarea>
        </p>
        <input type="submit">
    </form>
</body>
</html>

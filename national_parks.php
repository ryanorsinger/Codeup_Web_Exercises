<?php
require_once '../parks_logins.php';
require_once '../Park.php';
require_once '../Input.php';

$errors = [];

if(Input::has('name') &&
    Input::has('description') &&
    Input::has('area_in_acres') &&
    Input::has('date_established') &&
    Input::has('location')) {
        $park = new Park();
    try {
        $park->name = Input::getString('name');
    } catch (Exception $e) {
        $errors[] = $e->getMessage();
    }

    try {
        $park->area_in_acres = Input::getNumber('area_in_acres');
    } catch (Exception $e) {
        $errors[] = $e->getMessage();
    }

    try {
        $park->date_established = Input::getDate('date_established');
    } catch (Exception $e) {
        $errors[] = $e->getMessage();
    }

    try {
        $park->description = Input::getString('description');
    } catch (Exception $e) {
        $errors[] = $e->getMessage();
    }

    try {
        $park->location = Input::getString('location');
    } catch (Exception $e) {
        $errors[] = $e->getMessage();
    }

    if(empty($errors)) {
        $park->save();
    }

    unset($_POST);
}


$parks = Park::all();

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSSs -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <title>National Parks DB Application</title>

</head>
<body>
    <section class="errors">
        <? foreach($errors as $error): ?>
            <p><?= $error ?></p>
        <? endforeach; ?>
    </section>

    <main class='container'>
        <h1>National Parks!</h1>

        <section class='display col-md-8'>
            <table class='table table-striped'>
                <?php foreach($parks->attributes as $key => $park): ?>
                    <tr>
                        <td><a href="remove=<?= $key ?>">X</a></td>
                        <?php foreach($park as $key => $value): ?>
                            <td><?= $value ?></td>
                        <? endforeach; ?>
                    </tr>
                <? endforeach; ?>
                </tr>
            </table>
        </section>

        <section class='form col-md-4'>
            <form class='form-horizontal' method='POST' action='national_parks.php'>
                <div class="form-group">
                    <input value="<?= Input::get('name')?>" type="text" class="form-control" name="name" placeholder="Park Name">
                </div>
                <div class="form-group">
                    <input value="<?= Input::get('location')?>" type="text" class="form-control" name="location" placeholder="Location">
                </div>
                <div class="form-group">
                    <input value="<?= Input::get('date_established')?>" type="text" class="form-control" name="date_established" placeholder="Date Established">
                </div>
                <div class="form-group">
                    <input value="<?= Input::get('area_in_acres')?>" type="text" class="form-control" name="area_in_acres" placeholder="Area in Acres">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="description" placeholder="Description"><?= Input::get('description') ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Add park</button>
                </div>
            </form>
        </section>


    </main>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</body>
</html>

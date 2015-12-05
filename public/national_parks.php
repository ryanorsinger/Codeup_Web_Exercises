<?php

require_once '../parks_logins.php';
require_once '../db_connect.php';
require_once '../Input.php';

$page = Input::has('page') ? Input::get('page') : 1;

$limit = 2;
$offset = $page * $limit - $limit;

$selectAll = "SELECT * FROM parks LIMIT $limit OFFSET $offset";

$stmt = $dbc->query($selectAll);

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

function insertPark()
{
    $name = Input::get('name');
    $description = Input::get('description');
    $area_in_acres = Input::get('area_in_acres');
    $date_established = Input::get('date_established');
    $location = Input::get('location');

    $query = "INSERT INTO national_parks (name, location, area_in_acres, date_established, description"
            VALUES (:name, :location, :area_in_acres, :date_established, :description)");

    $stmt = $dbc->prepare($query);
    $stmt->bindValue()
    $stmt->bindValue()
    $stmt->bindValue()
    $stmt->bindValue()
    $stmt->execute();

}

if(!empty($_POST)) {

    if(Input::setAndNotEmpty('name') &&
        Input::setAndNotEmpty('date_established') &&
        Input::setAndNotEmpty('area_in_acres')) {
        Input::setAndNotEmpty('location')) {
        Input::setAndNotEmpty('description')) {

        insertPark($dbc);
    } else {
        echo "you cannot submit an empty form";
    }


}


var_dump($_POST);





?>
<!doctype html>
<html>
<head>
    <title>National Parks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/w3.css">
</head>
<body>
    <?= "You are on page number $page"; ?>
    <br>
    <?= "LIMIT is $limit"; ?>
    <br>
    <?= "OFFSET is $offset"; ?>

    <main class="w3-container w3-row w3-border">
            <?php if($page > 1): ?>
                <a href="national_parks.php?page=<?= $page-1 ?>">Previous</a>
            <?php endif; ?>
            <a href="national_parks.php?page=<?= $page+1 ?>">Next</a>
            <h2>National Parks</h2>
            <h3>Database Driven Web Application</h3>

        <section class="w3-col m2 w3-container grey">

        </section>

        <section class="w3-col m8 w3-container">
            <table>
            <tr>
                <th>Park Name</th>
                <th>Location</th>
                <th>Area in Acres</th>
                <th>Date Established</th>
                <th>Description</th>
            </tr>
            <?php foreach($parks as $park): ?>
            <tr>
                <td><?= $park['name'] ?></td>
                <td><?= $park['location'] ?></td>
                <td><?= $park['area_in_acres'] ?></td>
                <td><?= $park['date_established'] ?></td>
                <td><?= $park['description'] ?></td>
            </tr>
            <?php endforeach ?>
        </table>

        </section>





    </main>
</body>
</html>

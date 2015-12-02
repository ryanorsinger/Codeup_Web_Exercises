<?php


require_once 'parks_logins.php';
require_once 'db_connect.php';

$stmt = $dbc->query('SELECT * from parks');

print_r($stmt->fetchAll());

<?php

require_once 'parks_logins.php';
require_once 'db_connect.php';

$stmt = $dbc->query('SELECT * from parks');

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($results);


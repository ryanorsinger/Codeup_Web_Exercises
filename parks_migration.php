<?php

require_once 'parks_logins.php';
require_once 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$dbc->exec('DROP TABLE IF EXISTS parks');

$query = 'CREATE TABLE parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    description TEXT NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT(10,2) NOT NULL,
    location VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

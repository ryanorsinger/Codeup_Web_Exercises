<?php

require 'parks_logins.php';
require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS parks');

$query = 'CREATE TABLE parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    description TEXT NOT NULL,
    area_in_acres VARCHAR(50) NOT NULL,
    date_established VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

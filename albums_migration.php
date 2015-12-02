<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'codeup_test_db');
define('DB_USER', 'codeup');
define('DB_PASS', 'password');

require_once 'db_connect.php';

$dbc->exec("DROP TABLE IF EXISTS albums;");

$create_albums_table = "CREATE TABLE albums (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    artist VARCHAR(20) NOT NULL,
    name VARCHAR(25) NOT NULL,
    release_date DATE NOT NULL,
    sales DECIMAL(8, 1) NOT NULL,
    genre VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);";

$dbc->exec($create_albums_table);

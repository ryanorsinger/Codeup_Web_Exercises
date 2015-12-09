<?php

require_once '../Model.php';

$data = new Model();
$data->name = 'Pascal';
$data->game = "coding that skrilla";

echo $data->name . " is " . $data->game;


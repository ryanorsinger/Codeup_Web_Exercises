<?php

require_once "Log.php";

$log = new Log();
$log->filename = 'log-' . date('Y-m-d') . '.log';

$log->info('User logged in successfully');
$log->error('You do not have permission to view this file');
$log->logMessage('error', '404 page not found');

<?php

class Log
{

    public $handle;
    public $filename;

    public function __construct($prefix = 'log')
    {
        // Set the $filename property of the class to $prefix-YYYY-MM-DD.log.
        $this->filename = $prefix . date('Y-m-d') . '.log';

        //Open the $filename for appending and assign the file pointer to the property $handle.
        $this->handle = fopen($this->filename, 'a');
    }

    public function logMessage($logLevel, $message)
    {
        $stringToWrite = PHP_EOL . "[{$logLevel}] $message";
        fwrite($this->handle, $stringToWrite);
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

}

// procedural code
$log = new Log();
$log->logMessage('INFO', 'this info message is working');
unset($log);

<?php

class Log
{

    public $filename = '';

    public function __construct($prefix = 'log')
    {

    }


    public function logMessage($logLevel, $message)
    {
        // Each entry is formatted YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
        $dateWithTime = date('Y-m-d H:i:s');

        $stringToWrite = "$dateWithTime [{$logLevel}] $message";

        // Append string to file if file exists or create file and write to it.
        $handle = fopen($this->filename, 'a');
        fwrite($handle, PHP_EOL . $stringToWrite);
        fclose($handle);
    }

    public function info($message)
    {
        $this->logMessage('INFO', $message);
    }

    public function error($message)
    {
        $this->logMessage('ERROR', $message);
    }

}

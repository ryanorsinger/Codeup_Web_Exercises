<?php

class Automobile
{
    public $make;
    public $model;
    public $year = 'unknown';

    public function __construct($make = 'unknown', $model = 'unknown')
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function honk()
    {
        $this->revEngine();
        echo "Honk";
    }

    public function revEngine($size = 'medium')
    {
        if($size == 'small') {
            return 'put put put' . PHP_EOL;
        } else if ($size == 'large') {
            return 'VROOOM VROOOOM!!!!' . PHP_EOL;
        } else {
            return 'vroom vroom.' . PHP_EOL;
        }
    }

    public function getDescription()
    {
        $message = "Your $this->model automobile was made by $this->make in $this->year" . PHP_EOL;
        return $message;
    }

    public function __destruct()
    {
        echo "object was destroyed and destruct runs automatically";
    }

}

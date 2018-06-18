<?php

namespace Cars;

class Niva extends Car
{

    use \Cars\Engine;
    use \Cars\TransmissionManual;

    public function __construct($distance, $speed, $direction)
    {
        $this->distance = $distance;
        $this->speed = $speed;
        $this->direction = $direction;
    }

    public function nivaGo()
    {
        echo 'типа это нива <br> и для чегото этот класс нужен<hr>';
    }
}


<?php

namespace Cars;

class Bmw extends Car
{

    use \Cars\Engine;
    use \Cars\TransmissionAuto;

    public function __construct($distance, $speed, $direction)
    {
        $this->distance = $distance;
        $this->speed = $speed;
        $this->direction = $direction;
    }

    public function bmwGo()
    {
        echo 'типа это бмв <br> и для чегото этот класс нужен<hr>';
    }


}


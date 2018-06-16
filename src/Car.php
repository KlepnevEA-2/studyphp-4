<?php

namespace Cars;

require "Engine.php";
require "TransmissionAuto.php";

class Car
{
    use \Cars\Engine;
    use \Cars\TransmissionAuto;

    private $distance = 0;
    private $speed = 0;
    private $direction;

    public function __construct($distance, $speed, $direction)
    {
        $this->distance = $distance;
        $this->speed = $speed;
        $this->direction = $direction;
    }

    public function carGo()
    {
        echo 'Включаю зажигание!<br>';
        $this->goTransmission();
        if($this->transmis == 1 || $this->transmis == -1)
        {
            $this->goEngine();
        }
    }
}


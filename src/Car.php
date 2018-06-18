<?php

namespace Cars;

require "Engine.php";
require "TransmissionManual.php";
require "TransmissionAuto.php";

class Car
{

    public function carGo()
    {
        echo 'Включаю зажигание!<br>';
        $this->goTransmission();
        if($this->transmis !== 0)
        {
            $this->goEngine();
        }
    }
}


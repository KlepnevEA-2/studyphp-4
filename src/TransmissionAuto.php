<?php

namespace Cars;

trait TransmissionAuto
{

    public $transmis = 0;

    public function goTransmission()
    {
        echo 'это автомат!<br>';
        if ($this->direction == 1) {
            $this->transmis = 1;
            echo 'включили переднюю!<br>';
        } elseif ($this->direction == -1) {
            $this->transmis = -1;
            echo 'включили заднюю!<br>';
        } else {
            $this->transmis = 0;
            echo 'Мы никуда не едем!<br>';
        };
    }
}

<?php

namespace Cars;

trait TransmissionManual
{

    public $transmis = 0;

    public function goTransmission()
    {
        echo 'это не автомат!<br>';
        if ($this->direction == 1 && $this->speed <= 20) {
            $this->transmis = 1;
            echo 'включили первую!<br>';
        } elseif ($this->direction == 1 && $this->speed > 20) {
            $this->transmis = 2;
            echo 'включили вторую!<br>';
        } elseif ($this->direction == -1) {
            $this->transmis = -1;
            echo 'включили заднюю!<br>';
        } else {
            $this->transmis = 0;
            echo 'Мы никуда не едем!<br>';
        };
    }
}

<?php


class Car
{
    private $distance = 0;
    private $speed = 0;
    private $direction;
    private $transmission;
    private $engine = true;
    private $enginePower = 0;
    private $temperature = 0;


    protected function sayStatics() {
        echo 'Двигатель - '. $this->enginePower.' л/с.<br>';
        echo 'Дистанция - '. $this->distance.' км.<br>';
        echo 'Скорость - '. $this->speed.' м/c<br>';
        echo 'Наравление - '. $this->direction.'<br>';
        echo 'Передача - '. $this->transmission.'<br>';
    }

    protected function Temperature() {
        $this->temperature = $this->temperature+5;
    }

    protected function Engine() {
        if($this->engine) {
            echo 'Двигатель завелся <br>';
            $this->Transmission();

            for($i = 0; $i < $this->distance*1000/10; $i++) {
                $this->Temperature();
                echo $this->temperature.'C<br>';
                if($this->temperature > 90) {
                    $this->Cooling();
                    echo 'Перегрев!!!<br>';
                }
            }
        } else {
            echo 'Сперли гады!!! <br>';
        }

    }

    protected function Cooling() {
        echo 'Включили охлаждение <br>';
        $this->temperature = $this->temperature-10;
    }


    protected function Transmission() {
        if($this->direction === 'вперед') {
            $this->transmission = 1;
        } else {
            $this->transmission = -1;
        }
    }


    public function carGo($distance, $speed, $direction, $enginePower)
    {
        echo 'Включаю зажигание!!!  <br>';
        $this->distance = $distance;
        $this->enginePower = $enginePower;
        $this->speed = $this->enginePower * 2;
        $this->direction = $direction;
        $this->Engine();
        $this->sayStatics();

    }


}
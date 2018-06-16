<?php

namespace Cars;

trait Engine
{
    private $engine = true;
    private $temperature = 0;

    public function __construct($engine)
    {
        $this->engine = $engine;
    }

    public function goEngine()
    {
        if ($this->engine) {
            echo 'Двигатель на месте <br>';
            $this->runEngine();
        } else {
            echo 'Двигателя нет <br>';
            die();
        }
    }


    protected function runEngine()
    {
        echo 'друн-друн! <br>';
        for ($i = 0; $i < $this->distance * 1000 / 100; $i++) {
            $this->Temperature();
            echo $this->temperature . 'C<br>';
            if ($this->temperature > 90) {
                $this->Cooling();
                echo 'Перегрев!!!<br>';
            }
        }
        $this->stopEngine();
    }

    protected function Temperature()
    {
        $this->temperature = $this->temperature + 5;
    }

    protected function Cooling()
    {
        echo 'Включили охлаждение <br>';
        $this->temperature = $this->temperature - 10;
    }

    protected function stopEngine()
    {
        echo 'приехали! <br>';
        die();
    }

}

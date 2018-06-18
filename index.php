<?php
require "src/Car.php";
require "src/Niva.php";
require "src/Bmw.php";

//$CAR = new Cars\Car(5, 10, 1);
//$CAR->carGo();

$NIVA = new Cars\Niva(5, 30, 1);
$NIVA->nivaGo();
$NIVA->carGo();

//$BMW = new Cars\Bmw(5, 10, 1);
//$BMW->bmwGo();
//$BMW->carGo();

<?php

require "vendor/autoload.php";

use DesignPatterns\Builder\Builders\SportBuilder;
use DesignPatterns\Builder\Director;
use DesignPatterns\Builder\Builders\ManualBuilder;

function makeCar() {
    $director  = new Director();

    $carBuild = new SportBuilder();
    $director->constructSportsCar($carBuild);
    $car = $carBuild->getProduct();
    echo $car->report();

    $manualCar = new ManualBuilder();
    $director->constructSUV($manualCar);
    $manual = $manualCar->getProduct();
    echo $manual->report();
}

makeCar();
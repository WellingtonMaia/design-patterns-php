<?php

namespace DesignPatterns\Builder\Car;

use DesignPatterns\Builder\Engine\Engine;

class Sport extends Car
{

    function report(): string
    {
        return "Car Type: Sport \n" .
               "Seats: $this->quantitySeat; \n" .
               "Engine: {$this->engine->getBrand()} | {$this->engine->getModel()} | {$this->engine->getPower()} \n".
               "Trip computer:  $this->tripComputer \n".
               "Engine: $this->gps \n\n\n";
    }
}
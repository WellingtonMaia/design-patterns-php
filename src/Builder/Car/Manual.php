<?php

namespace DesignPatterns\Builder\Car;

use DesignPatterns\Builder\Engine\Engine;

class Manual extends Car
{
    public function report(): string
    {
        return "Car Type: Manual \n" .
               "Seats: $this->quantitySeat; \n" .
               "Engine: {$this->engine->getBrand()} | {$this->engine->getModel()} | {$this->engine->getPower()} \n".
               "Trip computer:  $this->tripComputer \n".
               "Engine: $this->gps \n\n";
    }
}
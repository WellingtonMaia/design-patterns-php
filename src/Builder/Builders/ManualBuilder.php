<?php

namespace DesignPatterns\Builder\Builders;

use DesignPatterns\Builder\Builder;
use DesignPatterns\Builder\Car\Manual;
use DesignPatterns\Builder\Engine\Engine;

class ManualBuilder implements Builder
{
    private Manual $manual;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->manual = new Manual();
    }

    public function setSeats(int $seats)
    {
        $this->manual->setQuantitySeat($seats);
    }

    public function setEngine(Engine $engine)
    {
        $this->manual->setEngine($engine);
    }

    public function setTripComputer(bool $tripComputer)
    {
        $this->manual->setTripComputer($tripComputer);
    }

    public function setGPS(bool $gps)
    {
        $this->manual->setGps($gps);
    }

    public function getProduct(): Manual
    {
        $product = $this->manual;
        $this->reset();
        return $product;
    }
}
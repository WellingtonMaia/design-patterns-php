<?php

namespace DesignPatterns\Builder\Builders;

use DesignPatterns\Builder\Builder;
use DesignPatterns\Builder\Car\Sport;
use DesignPatterns\Builder\Engine\Engine;

class SportBuilder implements Builder
{
    private Sport $sport;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->sport = new Sport;
    }

    public function setSeats(int $seats)
    {
        $this->sport->setQuantitySeat($seats);
    }

    public function setEngine(Engine $engine)
    {
        $this->sport->setEngine($engine);
    }

    public function setTripComputer(bool $tripComputer)
    {
        $this->sport->setTripComputer($tripComputer);
    }

    public function setGPS(bool $gps)
    {
        $this->sport->setGps($gps);
    }

    public function getProduct(): Sport
    {
        $product = $this->sport;
        $this->reset();
        return $product;
    }
}
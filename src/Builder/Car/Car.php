<?php

namespace DesignPatterns\Builder\Car;

use DesignPatterns\Builder\Engine\Engine;

abstract class Car
{
    protected int $quantitySeat;
    protected Engine $engine;
    protected bool $tripComputer;
    protected bool $gps;

    /**
     * @param int $quantitySeat
     */
    public function setQuantitySeat(int $quantitySeat): void
    {
        $this->quantitySeat = $quantitySeat;
    }

    /**
     * @param Engine $engine
     */
    public function setEngine(Engine $engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @param bool $tripComputer
     */
    public function setTripComputer(bool $tripComputer): void
    {
        $this->tripComputer = $tripComputer;
    }

    /**
     * @param bool $gps
     */
    public function setGps(bool $gps): void
    {
        $this->gps = $gps;
    }

    abstract function report(): string;
}
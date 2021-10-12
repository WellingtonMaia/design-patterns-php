<?php

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Engine\Engine;

interface Builder
{
    public function reset();
    public function setSeats(int $seats);
    public function setEngine(Engine $engine);
    public function setTripComputer(bool $tripComputer);
    public function setGPS(bool $gps);
}
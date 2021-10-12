<?php

namespace DesignPatterns\FactoryMethod\Logistics;

use DesignPatterns\FactoryMethod\Transports\Transport;
use DesignPatterns\FactoryMethod\Transports\Truck;

class RoadLogisticCreator extends LogisticsCreator
{
    private string $origin;
    private string $destination;

    public function __construct(string $origin, string $destination)
    {
        $this->origin = $origin;
        $this->destination = $destination;
    }

    public function createLogistic(): Transport
    {
        return new Truck($this->origin, $this->destination);
    }
}
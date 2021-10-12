<?php

namespace DesignPatterns\FactoryMethod\Logistics;

use DesignPatterns\FactoryMethod\Transports\Ship;
use DesignPatterns\FactoryMethod\Transports\Transport;

class MaritimeLogisticCreator extends LogisticsCreator
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
        return new Ship($this->origin, $this->destination);
    }
}
<?php
namespace DesignPatterns\FactoryMethod\Logistics;

use DesignPatterns\FactoryMethod\Transports\Transport;

abstract class LogisticsCreator
{
    public abstract function createLogistic(): Transport;

    public function doDelivery() {
        $transport = $this->createLogistic();

        $transport->deliver();
    }
}
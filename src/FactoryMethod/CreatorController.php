<?php

namespace DesignPatterns\FactoryMethod;

use DesignPatterns\FactoryMethod\Logistics\LogisticsCreator;

class CreatorController
{
    public function __construct(LogisticsCreator $logisticCreator)
    {
        $logisticCreator->doDelivery();
    }
}
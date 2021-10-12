<?php
require 'vendor/autoload.php';

use DesignPatterns\FactoryMethod\CreatorController;
use DesignPatterns\FactoryMethod\Logistics\MaritimeLogisticCreator;
use DesignPatterns\FactoryMethod\Logistics\RoadLogisticCreator;


$logisticRoad = new CreatorController(new RoadLogisticCreator("Mato Grosso do Sul (BR)", "São Paulo (BR)"));
$logisticMaritime = new CreatorController(new MaritimeLogisticCreator("Santos Harbor (BR)", "Los Angeles Long Beach (USA)"));

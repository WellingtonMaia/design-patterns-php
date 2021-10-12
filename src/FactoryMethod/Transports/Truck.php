<?php
namespace DesignPatterns\FactoryMethod\Transports;

class Truck implements Transport
{
    private string $origin;
    private string $destination;
    public function __construct(string $origin, string $destination)
    {
        $this->origin = $origin;
        $this->destination = $destination;
    }

    public function deliver()
    {
        echo "Do delivery with truck: origin: $this->origin -> destination: $this->destination \n";
    }
}
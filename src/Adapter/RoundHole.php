<?php

namespace DesignPatterns\Adapter;

class RoundHole
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function fits(RoundPeg $roundPeg): bool
    {
        return $this->radius >= $roundPeg->getRadius();
    }
}
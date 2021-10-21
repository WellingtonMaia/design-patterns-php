<?php

namespace DesignPatterns\Adapter;

class SquarePeg
{
    private float $width;

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getWidth(): float
    {
        return $this->width;
    }
}
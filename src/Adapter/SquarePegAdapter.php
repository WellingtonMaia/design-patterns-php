<?php

namespace DesignPatterns\Adapter;

class SquarePegAdapter extends RoundPeg
{
    private SquarePeg $peg;

    public function __construct(SquarePeg $peg)
    {
        $this->peg = $peg;
    }

    public function getRadius(): float
    {
        return $this->peg->getWidth() * sqrt(2) / 2;
    }

}
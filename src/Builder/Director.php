<?php

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Engine\Engine1_8;
use DesignPatterns\Builder\Engine\Engine2_0;

class Director
{
    private Builder $builder;

    /**
     * @param Builder $builder
     */
    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function constructSportsCar(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(2);
        $builder->setEngine(new Engine2_0("Model.01", "Brand.01"));
        $builder->setTripComputer(true);
        $builder->setGPS(true);
    }

    public function constructSUV(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(5);
        $builder->setEngine(new Engine1_8("Model.02", "Brand.02"));
        $builder->setTripComputer(false);
        $builder->setGPS(true);
    }
}
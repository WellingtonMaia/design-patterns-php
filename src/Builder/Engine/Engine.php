<?php

namespace DesignPatterns\Builder\Engine;

abstract class Engine
{
    private string $model;
    private string $brand;
    private float $power;

    /**
     * @param string $model
     * @param string $brand
     * @param float $power
     */
    public function __construct(string $model, string $brand, float $power)
    {
        $this->model = $model;
        $this->brand = $brand;
        $this->power = $power;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return float
     */
    public function getPower(): float
    {
        return $this->power;
    }
}
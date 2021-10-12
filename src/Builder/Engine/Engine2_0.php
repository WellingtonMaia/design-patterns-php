<?php

namespace DesignPatterns\Builder\Engine;

class Engine2_0 extends Engine
{
    public function __construct(string $model, string $brand)
    {
        parent::__construct($model, $brand, 2.0);
    }
}
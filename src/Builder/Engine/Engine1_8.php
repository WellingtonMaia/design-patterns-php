<?php

namespace DesignPatterns\Builder\Engine;

class Engine1_8 extends Engine
{
    public function __construct(string $model, string $brand)
    {
        parent::__construct($model, $brand, 1.8);
    }

}
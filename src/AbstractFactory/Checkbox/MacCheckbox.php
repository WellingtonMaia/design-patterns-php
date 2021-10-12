<?php

namespace DesignPatterns\AbstractFactory\Checkbox;

class MacCheckbox implements Checkbox
{
    public function paint()
    {
        echo "\n( )";
    }
}
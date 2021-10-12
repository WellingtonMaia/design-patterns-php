<?php

namespace DesignPatterns\AbstractFactory\Checkbox;

class WinCheckbox implements Checkbox
{
    public function paint()
    {
        echo "\n[]";
    }
}
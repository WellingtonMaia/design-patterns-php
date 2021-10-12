<?php

namespace DesignPatterns\AbstractFactory\Factory;

use DesignPatterns\AbstractFactory\Button\Button;
use DesignPatterns\AbstractFactory\Checkbox\Checkbox;

interface GUIFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}
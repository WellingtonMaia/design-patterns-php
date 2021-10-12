<?php

namespace DesignPatterns\AbstractFactory\Factory;

use DesignPatterns\AbstractFactory\Button\Button;
use DesignPatterns\AbstractFactory\Button\MacButton;
use DesignPatterns\AbstractFactory\Checkbox\Checkbox;
use DesignPatterns\AbstractFactory\Checkbox\MacCheckbox;

class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}
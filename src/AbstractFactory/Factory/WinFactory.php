<?php

namespace DesignPatterns\AbstractFactory\Factory;

use DesignPatterns\AbstractFactory\Button\Button;
use DesignPatterns\AbstractFactory\Button\WinButton;
use DesignPatterns\AbstractFactory\Checkbox\Checkbox;
use DesignPatterns\AbstractFactory\Checkbox\WinCheckbox;

class WinFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WinCheckbox();
    }
}
<?php

namespace DesignPatterns\AbstractFactory;

use DesignPatterns\AbstractFactory\Button\Button;
use DesignPatterns\AbstractFactory\Checkbox\Checkbox;
use DesignPatterns\AbstractFactory\Factory\GUIFactory;

class Application
{
    private GUIFactory $factory;
    private Button $button;
    private Checkbox $checkbox;

    /**
     * @param GUIFactory $factory
     */
    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createUI()
    {
        $this->button = $this->factory->createButton();
        $this->checkbox = $this->factory->createCheckbox();
    }

    public function paint()
    {
        $this->button->paint();
        $this->checkbox->paint();
    }
}
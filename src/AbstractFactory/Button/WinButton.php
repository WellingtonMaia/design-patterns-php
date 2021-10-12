<?php

namespace DesignPatterns\AbstractFactory\Button;

class WinButton implements Button
{
    public function paint()
    {
        echo "WIN BUTTON";
    }
}
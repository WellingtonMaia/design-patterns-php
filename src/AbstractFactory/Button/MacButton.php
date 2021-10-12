<?php

namespace DesignPatterns\AbstractFactory\Button;

class MacButton implements Button
{
    public function paint()
    {
        echo "[MAC BUTTON]";
    }
}
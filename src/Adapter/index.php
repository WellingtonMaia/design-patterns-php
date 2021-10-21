<?php

use DesignPatterns\Adapter\RoundHole;
use DesignPatterns\Adapter\RoundPeg;
use DesignPatterns\Adapter\SquarePeg;
use DesignPatterns\Adapter\SquarePegAdapter;

require 'vendor/autoload.php';

    $hole = new RoundHole(5);

    $roundPeg = new RoundPeg(5);
    echo "Fit: " . ($hole->fits($roundPeg) ? "SIM" : "NÃO" ). "\n"; // true

    $smallSquarePeg = new SquarePeg();
    $smallSquarePeg->setWidth(5);
    $largeSquarePeg = new SquarePeg();
    $largeSquarePeg->setWidth(10);
    // This is dont will compile. (type incompacted);
    // $hole->fits($smallSquarePeg);

    $smallSquarePegAdapter = new SquarePegAdapter($smallSquarePeg);
    $largeSquarePegAdapter = new SquarePegAdapter($largeSquarePeg);
    echo "Fit: " . ($hole->fits($smallSquarePegAdapter) ? "SIM" : "NÃO" ). "\n"; // true
    echo "Fit: " . ($hole->fits($largeSquarePegAdapter) ? "SIM" : "NÃO" ). "\n"; // false

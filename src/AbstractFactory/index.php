<?php

require "vendor/autoload.php";

use DesignPatterns\AbstractFactory\Application;
use DesignPatterns\AbstractFactory\Factory\MacFactory;
use DesignPatterns\AbstractFactory\Factory\WinFactory;
use DesignPatterns\AbstractFactory\ReadApplicationOS;

/**
 * @throws Exception
 */
function initialize(): Application
{
    $config = ReadApplicationOS::OS;

    $factory = null;

    if ($config === "WIN") {
       $factory = new WinFactory();
    }

    if ($config === "MAC") {
        $factory = new MacFactory();
    }

    if (empty($factory)) {
        throw new Exception("Error! Unknown operating system.");
    }

    return new Application($factory);
}

try {
    $app = initialize();
    $app->createUI();
    $app->paint();
} catch (Exception $e) {
    echo $e->getMessage();
}

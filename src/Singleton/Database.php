<?php

namespace DesignPatterns\Singleton;

use Exception;

class Database
{
    private static array $instances = [];

    private function __construct() {}

    /**
     * Singletons should not be cloneable.
     */
    protected function __clone() { }

    /**
     * Singletons should not be restorable from strings.
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Database
    {
        $class = self::class;
        if (empty(self::$instances[$class])) {
            self::$instances[$class] = new Database();
        }

        return self::$instances[$class];
    }

    public function query(string $query): string
    {
        return "Execute: $query \n";
    }
}

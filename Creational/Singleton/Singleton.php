<?php
namespace PHPDesignPatterns\Creational\Singleton;

final class Singleton
{
    private static $instance = null;

    public static function getInstance() :Singleton
    {
        if (static::$instance == null) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }
}

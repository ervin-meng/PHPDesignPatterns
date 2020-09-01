<?php
namespace PHPDesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createProductA();
    abstract public function createProductB();
}
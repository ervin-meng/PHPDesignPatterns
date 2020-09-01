<?php
namespace PHPDesignPatterns\Creational\AbstractFactory;

class Factory2 extends AbstractFactory
{
    public function createProductA()
    {
        return new ProductA2;
    }

    public function createProductB()
    {
        return new ProductB2;
    }
}
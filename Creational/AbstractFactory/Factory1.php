<?php
namespace PHPDesignPatterns\Creational\AbstractFactory;

class Factory1 extends AbstractFactory
{
    public function createProductA()
    {
        return new ProductA1;
    }

    public function createProductB()
    {
        return new ProductB1;
    }
}
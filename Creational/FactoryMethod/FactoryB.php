<?php
namespace PHPDesignPatterns\Creational\FactoryMethod;

class FactoryB extends AbstractFactory
{
    public function createProduct()
    {
        return new ProductB;
    }
}
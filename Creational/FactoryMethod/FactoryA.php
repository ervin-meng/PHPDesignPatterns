<?php
namespace PHPDesignPatterns\Creational\FactoryMethod;

class FactoryA extends AbstractFactory
{
    public function createProduct()
    {
        return new ProductA;
    }
}
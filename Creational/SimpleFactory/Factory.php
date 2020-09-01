<?php
namespace PHPDesignPatterns\Creational\SimpleFactory;

class Factory
{
    public function createProduct($productName)
    {
        if ('ProductA' == $productName) {
            return new ProductA();
        } else if('ProductB' == $productName){
            return new ProductB();
        }

        return null;
    }
}
<?php
namespace PHPDesignPatterns\Creational\Builder;

class Builder extends AbstractBuilder
{
    public function createProduct()
    {
        $this->product = new Product();
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function buildPart1()
    {
        $this->product->setPart1();
    }

    public function buildPart2()
    {
        $this->product->setPart2();
    }
}
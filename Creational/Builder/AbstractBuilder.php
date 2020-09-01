<?php
namespace DesignPatterns\Creational\Builder;

abstract class AbstractBuilder
{
    /**
     * @var Product
     */
    public $product;

    abstract function createProduct();
    abstract function getProduct();
    abstract function buildPart1();
    abstract function buildPart2();
}
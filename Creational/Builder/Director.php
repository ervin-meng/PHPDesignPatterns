<?php
namespace PHPDesignPatterns\Creational\Builder;

class Director
{
    public function build(Builder $builder)
    {
        $builder->createProduct();
        $builder->buildPart1();
        $builder->buildPart2();
        $builder->getProduct();
    }
}
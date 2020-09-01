<?php
namespace DesignPatterns\Creational\Builder;

abstract class AbstractProduct
{
    public $part1;
    public $part2;

    abstract public function setPart1();
    abstract public function setPart2();
    abstract public function run();
}
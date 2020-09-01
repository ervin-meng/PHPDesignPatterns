<?php
namespace PHPDesignPatterns\Structural\Bridge;

abstract class AbstractAbstraction
{
    abstract public function response(AbstractImplementor $implementor);
}
<?php
namespace DesignPatterns\Structural\Bridge;

abstract class AbstractAbstraction
{
    abstract public function response(AbstractImplementor $implementor);
}
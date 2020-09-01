<?php
namespace PHPDesignPatterns\Behavioral\Visitor;

abstract class AbstractElement
{
    abstract function accept(AbstractVisitor $visitor);
}
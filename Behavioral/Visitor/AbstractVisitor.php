<?php
namespace PHPDesignPatterns\Behavioral\Visitor;

abstract class AbstractVisitor
{
    abstract function visit(AbstractElement $element);
}
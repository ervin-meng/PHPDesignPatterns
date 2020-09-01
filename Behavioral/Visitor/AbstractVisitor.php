<?php
namespace DesignPatterns\Behavioral\Visitor;

abstract class AbstractVisitor
{
    abstract function visit(AbstractElement $element);
}
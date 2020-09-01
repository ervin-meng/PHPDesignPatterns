<?php
namespace DesignPatterns\Behavioral\Visitor;

abstract class AbstractElement
{
    abstract function accept(AbstractVisitor $visitor);
}
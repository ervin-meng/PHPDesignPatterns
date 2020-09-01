<?php
namespace PHPDesignPatterns\Behavioral\Visitor;

class Element extends AbstractElement
{
    public function accept(AbstractVisitor $visitor)
    {
        $visitor->visit($this);
    }
}
<?php
namespace DesignPatterns\Behavioral\Visitor;

class Element extends AbstractElement
{
    public function accept(AbstractVisitor $visitor)
    {
        $visitor->visit($this);
    }
}
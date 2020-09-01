<?php
namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class AbstractTemplate
{
    abstract protected function BasicMethodStep1();
    abstract protected function BasicMethodStep2();

    final public function templateMethod()
    {
        $this->BasicMethodStep1();
        $this->BasicMethodStep2();
    }
}
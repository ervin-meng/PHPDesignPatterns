<?php
namespace PHPDesignPatterns\Structural\Adapter;

abstract class Target
{
    abstract function sayInChinese(Adaptee $adaptee);
}
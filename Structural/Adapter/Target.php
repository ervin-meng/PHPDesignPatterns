<?php
namespace DesignPatterns\Structural\Adapter;

abstract class Target
{
    abstract function sayInChinese(Adaptee $adaptee);
}
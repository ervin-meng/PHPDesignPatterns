<?php
namespace PHPDesignPatterns;

use PHPDesignPatterns\Creational\Builder\Builder;
use PHPDesignPatterns\Creational\Builder\Director;
use PHPDesignPatterns\Creational\Singleton\Singleton;
use PHPDesignPatterns\Creational\Prototype\Prototype;

spl_autoload_register(function($class){
    $classPath = dirname(__DIR__).'\\'.$class.'.php';
    include_once($classPath);
});

//原型模式
$prototype = new Prototype();
$prototype->setStatus(1);
$prototypeOne = clone $prototype;
echo $prototypeOne->getStatus();
//单例模式
$instance = Singleton::getInstance();
//创建者模式
$director = new Director();
$builder  = new Builder();
$director->build($builder);
//简单工厂


<?php
namespace PHPDesignPatterns\Behavioral\Observer;

abstract class AbstractSubject
{
    protected $observers = [];

    public function on($eventName, AbstractObserver $observer, $observerMethod, $observerParams = [])
    {
        $this->observers[$eventName][] = [$observer, $observerMethod, $observerParams];
    }

    public function off($eventName, AbstractObserver $observer)
    {
        foreach($this->observers[$eventName] as $index => $observerInfo) {
            if (get_class($observer) == get_class($observerInfo[0])) {
                unset($this->observers[$eventName][$index]);
            }
        }
    }

    public function trigger($eventName)
    {
        foreach($this->observers[$eventName] as $handlerData) {
            call_user_func_array($handlerData[0], $handlerData[1]);
        }
    }
}
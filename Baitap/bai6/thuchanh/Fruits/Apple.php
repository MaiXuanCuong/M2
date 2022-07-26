<?php

include_once(dirname(__FILE__) . '/../AbstractClass/Fruits.php');

class Apple extends Fruit
{
    public function howToEat(): string
    {
        return "Apple could be slided";
    }
}
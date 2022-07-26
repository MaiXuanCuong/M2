<?php

include_once(dirname(__FILE__) . '/../AbstractClass/Fruits.php');

class Orange extends Fruit
{

    public function howToEat(): string
    {
        return "Orange could be juiced";
    }
}
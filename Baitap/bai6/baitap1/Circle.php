<?php

class Circle
{
    public float|int $radius;
    public string $name;

    public function __construct(string $name, float|int $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getRadius(): string
    {
        return $this->radius;
    }

    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }
}
<?php
namespace Models;

class Product {
    private string $name;
    private int $price;

    public function __construct($name = "", $price = 0) {
        $this->name = $name;
        $this->price = $price;
    }
    public function setName( string $name): void {
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }
    public function setPrice( int $price): void {
        $this->price = $price;
    }
    public function getPrice(): int {
        return $this->price;
    }





}



?>
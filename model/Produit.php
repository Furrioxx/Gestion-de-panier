<?php

class Produit{
    private string $name;
    private float $price;
    private int $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName(String $name){
        $this->name = $name;
    }

    public function getPrice(): float{
        return $this->price;
    }

    public function setPrice(float $price){
        $this->price = $price;
    }

    public function getQuantity(): int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }
}

?>
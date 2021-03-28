<?php

class Product
{
    private $name;
    private $price;
    private $category;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

$product = new Product();
$product->setName('William');
print $product->getName();

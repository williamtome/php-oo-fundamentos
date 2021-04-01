<?php
declare(strict_types=1);

class Product
{
    private $name;
    private $price;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}

class Cart
{
    private $items = [];

    public function addProduct(Product $product): void
    {
        $this->items[] = $product;
    }

    public function showItems(): array
    {
        return $this->items;
    }
}

$prod = new Product();
$prod->setName('Geladeira');
$prod->setPrice(19.99);

$prod2 = new Product();
$prod2->setName('Carro');
$prod2->setPrice(5992.5);

print_r($prod);

$cart = new Cart();
print_r($cart->showItems());

$cart->addProduct($prod);
$cart->addProduct($prod2);
print_r($cart->showItems());
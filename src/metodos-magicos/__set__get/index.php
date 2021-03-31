<?php

class Produto
{
    public $props = [];
    public function __set($name, $value)
    {
        $this->props[$name] = $value;
    }

    public function __get($name)
    {
        return $this->props[$name];
    }
}

$produto = new Produto();

$produto->name = "Produto 1";
$produto->price = 19.99;

print $produto->price;
// var_dump($produto->props);
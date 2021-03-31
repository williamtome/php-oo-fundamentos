<?php

class Produto
{
    public function __call($name, $params)
    {
        print_r([$name, $params]);
    }

    public static function __callStatic($name, $params)
    {
        print_r([$name, $params]);
    }
}

$produto = new Produto();
Produto::getConnection();

$produto->save("Produto 1", 19.00);
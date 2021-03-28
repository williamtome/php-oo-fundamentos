<?php

class Calculadora
{
    private $number;

    public function __construct()
    {
        $this->number = 0;
    }

    public function add($number)
    {
        $this->number += $number;
    }

    public function sub($number)
    {
        $this->number -= $number;
    }

    public function multiply($number)
    {
        $this->number *= $number;
    }

    public function divide($number)
    {
        $this->number /= $number;
    }
    
    public function total()
    {
        return $this->number;
    }
    
    public function clear()
    {
        return $this->number = 0;
    }
    
}
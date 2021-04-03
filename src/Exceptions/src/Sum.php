<?php

namespace Code;

class Sum
{
    public function doSum($num1, $num2)
    {
        if ($num2 > $num1) 
            throw new \InvalidArgumentException('O segundo parâmentro deve ser menor ou igual a ' . $num1);
        
        return $num1 + $num2 . PHP_EOL;
    }
}

<?php

require 'MatematicaBasicaInterface.php';

class Basico1 implements MatematicaBasicaInterface
{
    public function somar($a, $b)
    {
        return $a + $b . PHP_EOL;
    }
}

class Matematica
{
    private $basico;

    public function __construct(MatematicaBasicaInterface $b)
    {
        $this->basico = $b;
    }

    public function somar($x, $y)
    {
        return $this->basico->somar($x, $y);
    }
}


$a = new Matematica(new Basico1());

echo $a->somar(10, 15);
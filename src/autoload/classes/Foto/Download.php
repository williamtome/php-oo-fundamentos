<?php

namespace App\Foto;

class Download
{
    public function run($path)
    {
        return 'Fazendo download da foto no caminho: ' . $path . PHP_EOL;
    }
}
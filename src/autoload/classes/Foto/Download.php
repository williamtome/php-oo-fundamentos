<?php

namespace App\Foto;

use App\Contract\Storage;

class Download implements Storage
{
    public function run($path)
    {
        return 'Fazendo download da foto no caminho: ' . $path . PHP_EOL;
    }
}
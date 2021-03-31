<?php

namespace App\Foto;

use App\Contract\Storage;

class Upload implements Storage
{
    public function run($path)
    {
        return 'Fazendo upload da foto no caminho: ' . $path . PHP_EOL;
    }
}
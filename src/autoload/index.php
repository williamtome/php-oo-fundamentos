<?php

require 'autoload.php';

use App\Matematica\Basico;
use App\Foto\Upload;
use App\Matematica\Equacoes\PrimeiroGrau;

$m = new Basico();

echo $m->somar(2,2);

$f = new Upload();

echo $f->run('pasta1/foto.png');

$e = new PrimeiroGrau();

echo $e->run();
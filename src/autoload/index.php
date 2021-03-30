<?php

require 'autoload.php';

use \Matematica\Basico;
use \Foto\Upload;
use Matematica\Equacoes\PrimeiroGrau;

$m = new Basico();

echo $m->somar(2,2);

$f = new Upload();

echo $f->run('pasta1/foto.png');

$e = new PrimeiroGrau();

echo $e->run();
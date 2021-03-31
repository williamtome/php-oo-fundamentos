<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use App\Matematica\Basico;

require 'vendor/autoload.php';

$log = new Logger('teste');
$log->pushHandler(new StreamHandler('./logs/teste.txt', Logger::INFO));

$log->info('LOG DE TESTE...');
$log->error('ERRO NO SISTEMA!!!');

$mat = new Basico();
echo $mat->somar(10,20);
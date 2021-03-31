<?php

use App\Foto\Upload;

use Monolog\{
    Handler\StreamHandler,
    Logger
};

require 'vendor/autoload.php';

$log = new Logger('teste');
$log->pushHandler(new StreamHandler('./logs/teste.txt', Logger::INFO));

$log->info('LOG DE TESTE...');
$log->error('ERRO NO SISTEMA!!!');

$up = new Upload();
echo $up->run('teste.png');
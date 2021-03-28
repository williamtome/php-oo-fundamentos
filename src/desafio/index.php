<?php

require 'Calculadora.php';

$calc = new Calculadora();
$calc->add(12);
$calc->add(5);
$calc->sub(2);
$calc->multiply(2);
$calc->divide(5);
$calc->add(0.5);
echo 'TOTAL: ' . $calc->total();

$calc->clear();
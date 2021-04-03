<?php

require __DIR__ . '/vendor/autoload.php';

use Code\Sum;

try {
    
    $sum = new Sum();
    echo $sum->doSum(5, 20); //30
    
} catch (\Error $e) {
    echo $e->getMessage();
} /*catch (\InvalidArgumentException $e) {
    *echo $e->getMessage();
}*/ catch (\Code\Exceptions\MyCustomExceptions $e) {
    echo $e->getMessage();
}
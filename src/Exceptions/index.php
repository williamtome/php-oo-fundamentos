<?php

require __DIR__ . '/vendor/autoload.php';

use Code\Sum;

try {
    
    $sum = new Sum();
    echo $sum->doSum(10); //30
    
} catch (\Error $e) {
    echo $e->getMessage();
}
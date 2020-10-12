<?php

require __DIR__ . '/../vendor/autoload.php';

use Danielm\Hola\Greet;

$hola = new Greet('Tyrion');
echo $hola->sayit();
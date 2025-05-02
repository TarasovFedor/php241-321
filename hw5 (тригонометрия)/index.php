<?php

require dirname(__DIR__) . '/hw4 (калькулятор)/calculate.php';

$expression = file_get_contents('Task/expression.txt');

echo handleExpression($expression);
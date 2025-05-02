<?php

require_once dirname(__DIR__) . '/hw5 (тригонометрия)/trigonometry.php';

function calculate($expression) {
    if (is_numeric($expression)) {
        return $expression;
    }
    
    $arguments = explode('+', $expression);
    
    if (count($arguments) > 1) {
        $sum = calculate($arguments[0]);
        
        for ($i = 1; $i < count($arguments); $i++) {
            $argument = calculate($arguments[$i]);
            $sum += $argument;
        }
        
        return $sum;
    }
    
    $arguments = explode('-', $expression);
    
    if (count($arguments) > 1) {
        $difference = calculate($arguments[0]);
        
        for ($i = 1; $i < count($arguments); $i++) {
            $argument = calculate($arguments[$i]);
            $difference -= $argument;
        }
        
        return $difference;
    }
    
    $arguments = explode('*', $expression);
    
    if (count($arguments) > 1) {
        $product = calculate($arguments[0]);
        
        for ($i = 1; $i < count($arguments); $i++) {
            $argument = calculate($arguments[$i]);
            $product *= $argument;
        }
        
        return $product;
    }
    
    $arguments = explode('/', $expression);
    
    if (count($arguments) > 1) {
        $division = calculate($arguments[0]);
        
        for ($i = 1; $i < count($arguments); $i++) {
            $argument = calculate($arguments[$i]);
            if ($argument === 0) {
                return 'Error: division by zero';
            }
            
            $division /= $argument;
        }
        
        return $division;
    }
    
    return 'An error has accured';
}

function braceCheck($expression): bool {
    $brace = 0;
    
    for ($i = 0; $i < strlen($expression); $i++) {
        if ($expression[$i] === '(') {
            $brace++;
        }
        elseif ($expression[$i] === ')') {
            $brace--;
            
            if ($brace < 0) {
                return false;
            }
        }
    }
    
    if ($brace !== 0) {
        return false; 
    }
    
    return true;
}

function handleExpression($expression) {
    while(preg_match('~(sin|cos|tan|tg|cot|ctg)\((\d+(\.\d+\))?)\)~', $expression, $found)) {
        $expression = handleTrigonometry($expression);
    }
    
    $start = strpos($expression, '('); 
    if ($start === false) {
        return calculate($expression);
    }
    
    if (!braceCheck($expression)) {
        return 'Error: incorrect braces';
    }
    
    $index = 1;
    $end = $start + 1;
    
    while (($index > 0) && ($end < strlen($expression))) {
        if ($expression[$end] === ')') {
            $index--;
        }
        elseif ($expression[$end] === '(') {
            $index++;
        }
        $end++;
    }
    
    $end--;
    
    $new_expression = substr($expression, 0, $start);
    $new_expression .= handleExpression(substr($expression, $start + 1, $end - $start - 1));
    $new_expression .= substr($expression, $end + 1);
    
    return handleExpression($new_expression);
}

function handleTrigonometry($expression) {
    if (preg_match('~(sin|cos|tan|tg|cot|ctg)\((\d+(\.\d+\))?)\)~', $expression, $found)) {
        $operator = $found[1];
        $number = $found[2];
    
        $answer = trigonometry($operator, $number);
    
        $expression = preg_replace('~(sin|cos|tan|tg|cot|ctg)\(\d+(\.\d+\))?\)~', $answer, $expression, 1);
    
        return $expression;
    }
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['expression'];
    
    $result = handleExpression($expression);
    
    echo htmlspecialchars($result);
}
// else {
    //     echo 'An error has accured';
    // }
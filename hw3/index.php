<?php

// Вариант 0 -- X * 9 = 56

$equation = 'X * 9 = 56';

$equationElements = explode(' ', $equation);

if ($equationElements[1] === '*') {
    $answer = $equationElements[0] === 'X' 
        ? $equationElements[4] / $equationElements[2] 
        : $equationElements[4] / $equationElements[0];
}
elseif ($equationElements[1] === '/') {
    $answer = $equationElements[0] === 'X' 
        ? $equationElements[2] * $equationElements[4] 
        : $equationElements[0] / $equationElements[4];
}
elseif ($equationElements[1] === '+') {
    $answer = $equationElements[0] === 'X' 
        ? $equationElements[4] - $equationElements[2] 
        : $equationElements[4] - $equationElements[0];
}
elseif ($equationElements[1] === '-') {
    $answer = $equationElements[0] === 'X' 
        ? $equationElements[4] + $equationElements[2] 
        : $equationElements[4] + $equationElements[0];
}

echo $answer;

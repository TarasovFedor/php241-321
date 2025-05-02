<?php

function trigonometry($function, $parameter) {
    $result = 'error';
    
    switch($function) {
        case 'sin':
            $result = sin(deg2rad($parameter));
            break;
        case 'cos':
            $result = cos(deg2rad($parameter));
            break;
        case 'tan':
        case 'tg':
            $result = tan(deg2rad($parameter));
            break;
        case 'cot':
        case 'ctg':
            $result = 1 / tan(deg2rad($parameter));
            break;
    }

    return $result;
}
<?php

function in_fib($input) {

    $input = intval($input);

    [$x, $y] = [0,1];

    if($input == $x || $input == $y) {
        return true;
    }

    while ($y < $input) {
        $temp = $y;
        $y = $x + $y;
        $x = $temp;

        if ($y == $input) {
            return true;
        }
    }

    return false;
}

$arg = $argv[1];

if (in_fib($arg)) {
    echo "O número $arg pertence à sequência de Fibonacci!\n";
} else {
    echo "O número $arg não pertence à sequência de Fibonacci!\n";
}

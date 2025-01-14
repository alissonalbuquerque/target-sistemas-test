<?php

$str_input   = 'aabbcc';
$str_output  = '';

for ($i = strlen($str_input)-1; $i > -1 ; $i--) {
    $str_output = $str_output . $str_input[$i];
}

echo "$str_output\n";

?>
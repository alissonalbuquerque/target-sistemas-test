<?php

$month_faturament = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'OTHERS' => 19849.53
];

$total = 
    array_reduce($month_faturament, function($carry, $item) {
        $carry = $carry + $item;
        return $carry;
    }, 0.0);

$month_percentage = [];
foreach($month_faturament as $key => $value) {
    $month_percentage[$key] = ($value / $total) * 100.0;
    $month_percentage[$key] = number_format($month_percentage[$key], 2, ',', '.');
}

foreach($month_percentage as $key => $value) {
    echo "$key -> $value %" . "\n";
}

<?php

/** @var string */
$file = file_get_contents('./dados.json');

/** @var array */
$data = json_decode($file, true);

$data = array_filter($data, function($item) {
    return $item['valor'] > 0.0;
});

$vals = array_column($data, 'valor');

$min = min($vals);
$min = number_format($min, 2);

$max = max($vals);
$max = number_format($max, 2);

$avg = array_sum($vals) / count($vals);

$abv_avg = array_filter($data, function($item) use ($avg) {
    return $item['valor'] > $avg;
});

$count_abv_avg = count($abv_avg);

echo "Menor Valor: $min" . "\n";
echo "Maior Valor: $max" . "\n";
echo "Dias com faturamento acima da média : $count_abv_avg" . "\n";


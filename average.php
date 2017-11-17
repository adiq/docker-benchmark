<?php

$file = $argv[1] !== '/' ? __DIR__ . '/' . $argv[1] : $argv[1];
$content = file_get_contents($file);

preg_match_all('/real(.*?)(\d+)m (\d+.\d+)s/', $content, $matches);

$total = 0;
foreach ($matches[2] as $index => $minutes) {
    $minutes = (int)$minutes;
    $seconds = (float)$matches[3][$index];

    $seconds += $minutes*60;
    $total += $seconds;

    echo 'Sample #'.($index+1).' - '. $seconds .'s'.PHP_EOL;
}

$average = $total/count($matches[2]);
echo PHP_EOL.'Average - '. number_format($average, 4).'s';
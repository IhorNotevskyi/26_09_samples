<?php

$array = [
    'name' => [
        'Dmytro',
        'Sanya'
    ],
    'lastName' => 'Kotenko',
    'job' => [
        'The App Solutions',
        'PHP Academy'
    ],
    'dates' => [
        '2017' => [
            'education' => [
                '26.09',
                '05.04'
            ]
        ]
    ]
];

function countRecursive(array $array, $countParents = false)
{
    $count = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            if ($countParents) {
                $count++;
            }
            $count += countRecursive($value, $countParents);
        } else {
            $count++;
        }
    }

    return $count;
}

function printRecursive(array $array, $separator = '   ')
{
    static $level = 0;
    $isLevelUpped = false;

    $tab = str_repeat($separator, $level);

    $string = '';
    foreach ($array as $key => $value) {
        $string .= "{$tab}{$key} => ";
        if (is_array($value)) {
            if (false === $isLevelUpped) {
                $level++;
                $isLevelUpped = true;
            }
            $string .= '[' . PHP_EOL;
            $string .= printRecursive($value, $separator);
            $string .= "{$tab}]," . PHP_EOL;
        } else {
            $string .= "{$value}," . PHP_EOL;
        }

    }

    return rtrim($string, " \t\n\r\0\x0B,") . PHP_EOL;
}

echo '<pre>';
echo printRecursive($array);
echo '<pre>';

echo 'Count: ' . countRecursive($array, true);
echo '<br>';

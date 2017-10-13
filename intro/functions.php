<?php

function printRandomString()
{
    echo __FUNCTION__ . ': ' . md5(uniqid()) . '<br>';
}

$func = 'printRandomString';
$func();

function printString($string)
{
    echo __FUNCTION__ . ': ' . $string . '<br>';
}

printString('Something');

$anonymous = function ($arg) {
    var_dump($arg);
    echo '<br>';

};
var_dump($anonymous);
call_user_func($anonymous, 1);
$anonymous(2);

$array = [1,3,4,5,6];
$filtered = array_filter($array, function ($item) {
    return $item % 2 === 0;
});
var_dump($filtered);
echo '<br>';

function filterPositiveNumbers ($item) {
    return $item % 2 === 0;
};
$positives = array_filter($array, 'filterPositiveNumbers');
var_dump($positives);
echo '<br>';

function printStringManyTimes($string, $multiplier = 1)
{
    echo str_repeat("{$string}<br>", $multiplier);
}
printStringManyTimes('random string');
printStringManyTimes('random string', 6);

function getValue(array $array, $key, $default = null)
{
    return array_key_exists($key, $array) ? $array[$key] : $default;
}
$array2 = ['test' => 12, 'qwerty' => 55];
var_dump(getValue($array2, 'qwerty'));

$outside = 123;
function testVisibilityArea()
{
    $inside = 4321;

    var_dump($outside);
    echo '<br>';
    var_dump($GLOBALS['outside']);
    $GLOBALS['outside'] = 33333;
    $GLOBALS['inside'] = $inside;
    echo '<br>';

    var_dump($outside);
    echo '<br>';

    global $outside;
    var_dump($outside);
    $outside = 44444;
    unset($outside);
    var_dump($outside);
}
testVisibilityArea();

var_dump($inside, $outside);
echo '<br>';

$coefficient = 3.6;
$data = [5, 7, 3, 4];
$data2 = [4, 76, 23, 44];
$multiplier = function (&$item) use ($coefficient) {
    $item *= $coefficient;
};

array_walk($data, $multiplier);
array_walk($data2, $multiplier);

echo '<pre>';
var_dump($data, $data2);
echo '</pre>';

function testReturn($input)
{
    $input = $input++ + ++$input;
    return $input;
}
var_dump(testReturn(22));
echo '<br>';

function testStatic()
{
    static $var = '';

    var_dump($var);
    $var .= mt_rand(0, 9);
}

testStatic();
testStatic();
testStatic();
testStatic();
testStatic();
echo '<br>';

function oldToArray()
{
    $args = func_get_args();
    var_dump(func_get_arg(1));
    var_dump(func_num_args());
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
}
oldToArray(1, 'test', 123, 'qawerty');

function toArray(...$args)
{
    return $args;
}
$array3 = toArray(111, 44, 'tets', 'some string', [1, 3]);
var_dump($array3);
echo '<br>';

var_dump(toArray(1, 5, 6)[1]);
echo '<br>';

list($first, $second, $third) = toArray(4, 6, 'test');
var_dump($first, $second, $third);
echo '<br>';

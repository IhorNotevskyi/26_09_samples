<?php echo 'Hello world' . PHP_EOL; ?>
<?php echo 'Hello world 2' . PHP_EOL; ?>

<?php

//echo 1+2;
#echo 2+3;

/*
echo 1+2;
echo 4+4;
*/

/**
 * @param string $a
 * @return int
 */
/*function ($a) {
    return 1;
}*/

$var = 1;

$var2 = &$var;
$var2 = 2;
var_dump($var, $var2);

$q = 'test';
$test = 'qwerty';
$qwerty = 'www';
$$$$q = 32;

var_dump(${${${$q}}});

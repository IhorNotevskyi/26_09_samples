<?php

class Test
{
    const ONE = 1;
    const TWO = 2;
}

class Test2
{
    const ONE = 'one';
    const TWO = 'two';
}

var_dump(Test::ONE, Test2::ONE);

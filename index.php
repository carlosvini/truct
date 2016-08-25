<?php

define('·int', 'int');
define('·string', 'int');

class Vector
{
    public function __construct()
    {

    }
}

class Vector·int extends Vector
{
    public function __construct()
    {

    }
}

function dd()
{
    echo '<pre>';
    var_dump(func_get_args());
    echo '</pre>';
    die;
}

function vector()
{
    return new Vector·int;
}

function map()
{
    dd(func_get_args());
}

function getAges(): Vector·int
{
    $vector = vector(·string);

    // $vector[] = 23;
    // $vector[] = 24;
    // $vector[] = 'banana';
    return $vector;
}

function sumAges(Vector·int $numbers): int
{
    return 3;
}

dd(sumAges(getAges()));

$bla = map(·int, ·string);
$bla = vector(0);
$bla = map(0, '');

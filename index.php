<?php

$array = array(1, 2, 3);
var_dump($array);
$array = [1, 2, 3];
var_dump($array);
$array = [
    1,
    'kaspar',
    true,
    [1, 2, 3],
    3.4,
];
var_dump($array);
$array = [
    'name' => 'Kaspar',
    'age' => 32,
    'isMale' => true,
];
var_dump($array);

$array = [
    1,
    2,
    'name' => 'Kaspar',
    'age' => 32,
    6,
    'isMale' => true,
    100 => 3,
    4,
    5,
];
var_dump($array);

$array = [1, 2, 3];

var_dump($array[1]);

$array = [
    'name' => 'Kaspar',
    'age' => 32,
    'isMale' => true,
];
var_dump($array['name']);
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($array[2][1]);

$array = [1,2,3];
var_dump($array);
array_push($array, 4);
array_push($array, 5,6,7);
$array[] = 8;
var_dump($array);
$array[1] = 'something else';
var_dump($array);
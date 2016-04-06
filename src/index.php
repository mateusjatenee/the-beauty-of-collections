<?php

use Illuminate\Support\Collection;

require_once '../vendor/autoload.php';

$array = [1, 2, 3, 4, 5, 6];

$collection = new Collection($array);

// var_dump($collection->chunk(3)); // => [[1, 2, 3], [4, 5, 6]]

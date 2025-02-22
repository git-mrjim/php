<?php

use Illuminate\Support\Collection;

$numbers = new Collection([
    45,
    63,
    77,
    88,
    99,
    100,
    10,
    2,
    4,
    7
]);

if ($numbers->contains(10)) {
    var_dump('contains 10');
}

$filter = $numbers->filter(function ($number) {
    return $number >= 10;
});

var_dump($filter);
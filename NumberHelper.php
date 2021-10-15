<?php

class NumberHelper {

    private $array;

    function __construct($array) {
        $this->array = $array;
    }

    function sumOfNumbers($this->array) {

        $tally = 0;

        foreach ($array as $arr) {
            $tally += $arr;
        }

        return $tally;
    }
} 
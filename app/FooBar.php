<?php

namespace App;

class FooBar
{

    public function checkNumber(int $number): string
    {
        $numberFoo = 3;
        $outputFoo = 'Foo';
        $numberBar = 5;
        $outputBar = 'Bar';

        if ($number % $numberBar === 0 && $number % $numberFoo === 0) {
            $result = $outputFoo . $outputBar;
        } elseif ($number % $numberBar === 0) {
            $result = $outputBar;
        } elseif ($number % $numberFoo === 0) {
            $result = $outputFoo;
        } else {
            $result = $number;
        }
        return $result;
    }
}
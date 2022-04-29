<?php

namespace App;

use App\Service;

class FooBarQix extends Service
{
    public function __construct($foo = 3, $bar = 5, $qix = 7)
    {
        //set order
        $this->setValues([
            'Foo' => $foo,
            'Bar' => $bar,
            'Qix' => $qix
        ]);
    }
}
<?php

namespace App;

use App\Service;


class FooInfQix extends Service
{
    public function __construct($inf = 8, $qix = 7, $foo = 3, $separator = "; ")
    {
        //set separator
        $this->setSeparator($separator);
        //set order
        $this->setValues([
            'Inf' => $inf,
            'Qix' => $qix,
            'Foo' => $foo
        ]);
        //set symbol to add at the end if divides with symbol value and returns complete number;
        $this->setsymbol("Inf");
    }


}
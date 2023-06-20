<?php

namespace App;

use App\Service;


class FooInfQix extends Service
{
    public const FOO_VALUE = 3;
    public const QIX_VALUE = 5;
    public const INF_VALUE = 7;
    public const SEPARATOR = "; ";
    //set symbol to add at the end if divides with symbol value and returns complete number;
    public const SYMBOL= "Inf";

    public function __construct()
    {
        $this->setSeparator(self::SEPARATOR);
        $this->setValues([
            'Inf' => self::INF_VALUE,
            'Qix' => self::QIX_VALUE,
            'Foo' => self::FOO_VALUE
        ]);
        $this->setSymbol(self::SYMBOL);
    }
}
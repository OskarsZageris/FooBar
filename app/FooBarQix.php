<?php

namespace App;

use App\Service;

class FooBarQix extends Service
{
    public const FOO_VALUE = 3;
    public const BAR_VALUE = 5;
    public const QIX_VALUE = 7;


    public function __construct()
    {
        $this->setValues([
            'Foo' => self::FOO_VALUE,
            'Bar' => self::BAR_VALUE,
            'Qix' => self::QIX_VALUE
        ]);
    }
}
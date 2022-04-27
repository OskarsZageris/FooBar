<?php
namespace App;

class FooBar
{

    public function checkNumber(int $number): string
    {
        if($number%3==0){
            return "Foo";
        }


        return '';
    }
}
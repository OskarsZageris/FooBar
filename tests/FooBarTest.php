<?php
namespace Tests;

use App\FooBar;
use PHPUnit\Framework\TestCase;

class FooBarTest extends TestCase
{
    public function testCheckNumberShouldReturnFoo()
    {
        $foo = new FooBar();
        $this->assertSame('Foo', $foo->checkNumber(3));
        $this->assertSame('Foo', $foo->checkNumber(6));
        $this->assertSame('Foo', $foo->checkNumber(66));
        $this->assertSame('Foo', $foo->checkNumber(69));
    }

    public function testMCheckNumberShouldReturnBar()
    {
        $bar = new FooBar();
        $this->assertSame('Bar', $bar->checkNumber(5));
        $this->assertSame('Bar', $bar->checkNumber(10));
        $this->assertSame('Bar', $bar->checkNumber(50));
        $this->assertSame('Bar', $bar->checkNumber(80));
    }

    public function testCheckNumberShouldReturnFooBar()
    {
        $fooBar = new FooBar();
        $this->assertSame('Foo, Bar', $fooBar->checkNumber(15));
        $this->assertSame('Foo, Bar', $fooBar->checkNumber(60));
        $this->assertSame('Foo, Bar', $fooBar->checkNumber(120));
        $this->assertSame('Foo, Bar', $fooBar->checkNumber(300));
    }

    public function testCheckNumberShouldReturnNumber()
    {
        $number = new FooBar();
        $this->assertSame('4', $number->checkNumber(4));
        $this->assertSame('8', $number->checkNumber(8));
        $this->assertSame('22', $number->checkNumber(22));
        $this->assertSame('667', $number->checkNumber(667));
    }

    public function testCheckNumberShouldReturnQix()
    {
        $number = new FooBar();
        $this->assertSame('Qix', $number->checkNumber(7));
        $this->assertSame('Qix', $number->checkNumber(14));
        $this->assertSame('Qix', $number->checkNumber(28));
        $this->assertSame('Qix', $number->checkNumber(49));
    }


    public function testCheckNumberShouldReturnFooQix()
    {
        $number = new FooBar();
        $this->assertSame('Foo, Qix', $number->checkNumber(21));
        $this->assertSame('Foo, Qix', $number->checkNumber(42));
        $this->assertSame('Foo, Qix', $number->checkNumber(63));
        $this->assertSame('Foo, Qix', $number->checkNumber(126));
    }

    public function testCheckNumberShouldReturnBarQix()
    {
        $number = new FooBar();
        $this->assertSame('Bar, Qix', $number->checkNumber(35));
        $this->assertSame('Bar, Qix', $number->checkNumber(70));
        $this->assertSame('Bar, Qix', $number->checkNumber(140));
        $this->assertSame('Bar, Qix', $number->checkNumber(280));
    }
    public function testCheckNumberShouldReturnFooBarQix()
    {
        $number = new FooBar();
        $this->assertSame('Foo, Bar, Qix', $number->checkNumber(105));
        $this->assertSame('Foo, Bar, Qix', $number->checkNumber(210));
        $this->assertSame('Foo, Bar, Qix', $number->checkNumber(525));
        $this->assertSame('Foo, Bar, Qix', $number->checkNumber(735));
    }




}
<?php
namespace Tests;

use App\FooBar;
use PHPUnit\Framework\TestCase;

class FooBarTest extends TestCase
{
    public function testCheckNumberModifierShouldReturnFoo()
    {
        $foo = new FooBar();
        $this->assertSame('Foo', $foo->checkNumberModifier(3));
        $this->assertSame('Foo', $foo->checkNumberModifier(6));
        $this->assertSame('Foo', $foo->checkNumberModifier(66));
        $this->assertSame('Foo', $foo->checkNumberModifier(69));
    }

    public function testCheckNumberModifierShouldReturnBar()
    {
        $bar = new FooBar();
        $this->assertSame('Bar', $bar->checkNumberModifier(5));
        $this->assertSame('Bar', $bar->checkNumberModifier(10));
        $this->assertSame('Bar', $bar->checkNumberModifier(50));
        $this->assertSame('Bar', $bar->checkNumberModifier(80));
    }

    public function testCCheckNumberModifierShouldReturnFooBar()
    {
        $fooBar = new FooBar();
        $this->assertSame('Foo, Bar', $fooBar->checkNumberModifier(15));
        $this->assertSame('Foo, Bar', $fooBar->checkNumberModifier(60));
        $this->assertSame('Foo, Bar', $fooBar->checkNumberModifier(120));
        $this->assertSame('Foo, Bar', $fooBar->checkNumberModifier(300));
    }

    public function testCheckNumberModifierShouldReturnNumber()
    {
        $number = new FooBar();
        $this->assertSame('4', $number->checkNumberModifier(4));
        $this->assertSame('8', $number->checkNumberModifier(8));
        $this->assertSame('22', $number->checkNumberModifier(22));
        $this->assertSame('667', $number->checkNumberModifier(667));
    }

    public function testCheckNumberModifierShouldReturnQix()
    {
        $number = new FooBar();
        $this->assertSame('Qix', $number->checkNumberModifier(7));
        $this->assertSame('Qix', $number->checkNumberModifier(14));
        $this->assertSame('Qix', $number->checkNumberModifier(28));
        $this->assertSame('Qix', $number->checkNumberModifier(49));
    }


    public function testCheckNumberModifierShouldReturnFooQix()
    {
        $number = new FooBar();
        $this->assertSame('Foo, Qix', $number->checkNumberModifier(21));
        $this->assertSame('Foo, Qix', $number->checkNumberModifier(42));
        $this->assertSame('Foo, Qix', $number->checkNumberModifier(63));
        $this->assertSame('Foo, Qix', $number->checkNumberModifier(126));
    }

    public function testCheckNumberModifierShouldReturnBarQix()
    {
        $number = new FooBar();
        $this->assertSame('Bar, Qix', $number->checkNumberModifier(35));
        $this->assertSame('Bar, Qix', $number->checkNumberModifier(70));
        $this->assertSame('Bar, Qix', $number->checkNumberModifier(140));
        $this->assertSame('Bar, Qix', $number->checkNumberModifier(280));
    }
    public function testCheckNumberModifierShouldReturnFooBarQix()
    {
        $number = new FooBar();
        $this->assertSame('Foo, Bar, Qix', $number->checkNumberModifier(105));
        $this->assertSame('Foo, Bar, Qix', $number->checkNumberModifier(210));
        $this->assertSame('Foo, Bar, Qix', $number->checkNumberModifier(525));
        $this->assertSame('Foo, Bar, Qix', $number->checkNumberModifier(735));
    }

    public function testCheckEveryNumberShouldReturnFoo(){
        $number = new FooBar();
        $this->assertSame('Foo', $number->checkEveryNumber(3));
        $this->assertSame('FooFoo', $number->checkEveryNumber(1313));
        $this->assertSame('FooFooFoo', $number->checkEveryNumber(333));
        $this->assertSame('FooFooFooFoo', $number->checkEveryNumber(88366333));
    }
    public function testCheckEveryNumberShouldReturnBar(){
        $number = new FooBar();
        $this->assertSame('Bar', $number->checkEveryNumber(5));
        $this->assertSame('BarBar', $number->checkEveryNumber(1515));
        $this->assertSame('BarBarBar', $number->checkEveryNumber(555));
        $this->assertSame('BarBarBarBar', $number->checkEveryNumber(889556655));
    }
    public function testCheckEveryNumberShouldReturnQix(){
        $number = new FooBar();
        $this->assertSame('Qix', $number->checkEveryNumber(7));
        $this->assertSame('QixQix', $number->checkEveryNumber(7417));
        $this->assertSame('QixQixQix', $number->checkEveryNumber(777));
        $this->assertSame('QixQixQixQix', $number->checkEveryNumber(879476747));
    }
    public function testCheckEveryNumberShouldReturnFooBarQix(){
        $number = new FooBar();
        $this->assertSame('FooBar', $number->checkEveryNumber(35));
        $this->assertSame('QixQixFoo', $number->checkEveryNumber(7723));
        $this->assertSame('QixBarQixFooQix', $number->checkEveryNumber(75737));
        $this->assertSame('FooBarQix', $number->checkEveryNumber(34567));
        $this->assertSame('FooBarQixBarFoo', $number->checkEveryNumber(3456753));
        $this->assertSame('FooBarQixQixQix', $number->checkEveryNumber(3456777));
        $this->assertSame('BarFooBarQixFooBarQix', $number->checkEveryNumber(535734567));
    }



}
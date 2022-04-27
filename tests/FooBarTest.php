<?php
namespace Tests;

use App\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testCheckNumberModifierShouldReturnFoo()
    {
        $foo = new Service();
        $this->assertSame('Foo', $foo->checkNumberModifier(3));
        $this->assertSame('Foo', $foo->checkNumberModifier(6));
        $this->assertSame('Foo', $foo->checkNumberModifier(66));
        $this->assertSame('Foo', $foo->checkNumberModifier(69));
    }

    public function testCheckNumberModifierShouldReturnBar()
    {
        $bar = new Service();
        $this->assertSame('Bar', $bar->checkNumberModifier(5));
        $this->assertSame('Bar', $bar->checkNumberModifier(10));
        $this->assertSame('Bar', $bar->checkNumberModifier(50));
        $this->assertSame('Bar', $bar->checkNumberModifier(80));
    }

    public function testCCheckNumberModifierShouldReturnFooBar()
    {
        $fooBar = new Service();
        $this->assertSame('FooBar', $fooBar->checkNumberModifier(15));
        $this->assertSame('FooBar', $fooBar->checkNumberModifier(60));
        $this->assertSame('FooBar', $fooBar->checkNumberModifier(120));
        $this->assertSame('FooBar', $fooBar->checkNumberModifier(300));
    }

    public function testCheckNumberModifierShouldReturnNumber()
    {
        $number = new Service();
        $this->assertSame('4', $number->checkNumberModifier(4));
        $this->assertSame('8', $number->checkNumberModifier(8));
        $this->assertSame('22', $number->checkNumberModifier(22));
        $this->assertSame('667', $number->checkNumberModifier(667));
    }

    public function testCheckNumberModifierShouldReturnQix()
    {
        $number = new Service();
        $this->assertSame('Qix', $number->checkNumberModifier(7));
        $this->assertSame('Qix', $number->checkNumberModifier(14));
        $this->assertSame('Qix', $number->checkNumberModifier(28));
        $this->assertSame('Qix', $number->checkNumberModifier(49));
    }


    public function testCheckNumberModifierShouldReturnFooQix()
    {
        $number = new Service();
        $this->assertSame('FooQix', $number->checkNumberModifier(21));
        $this->assertSame('FooQix', $number->checkNumberModifier(42));
        $this->assertSame('FooQix', $number->checkNumberModifier(63));
        $this->assertSame('FooQix', $number->checkNumberModifier(126));
    }

    public function testCheckNumberModifierShouldReturnBarQix()
    {
        $number = new Service();
        $this->assertSame('BarQix', $number->checkNumberModifier(35));
        $this->assertSame('BarQix', $number->checkNumberModifier(70));
        $this->assertSame('BarQix', $number->checkNumberModifier(140));
        $this->assertSame('BarQix', $number->checkNumberModifier(280));
    }
    public function testCheckNumberModifierShouldReturnFooBarQix()
    {
        $number = new Service();
        $this->assertSame('FooBarQix', $number->checkNumberModifier(105));
        $this->assertSame('FooBarQix', $number->checkNumberModifier(210));
        $this->assertSame('FooBarQix', $number->checkNumberModifier(525));
        $this->assertSame('FooBarQix', $number->checkNumberModifier(735));
    }

    public function testCheckEveryNumberShouldReturnFoo(){
        $number = new Service();
        $this->assertSame('Foo', $number->checkEveryNumber(3));
        $this->assertSame('FooFoo', $number->checkEveryNumber(1313));
        $this->assertSame('FooFooFoo', $number->checkEveryNumber(333));
        $this->assertSame('FooFooFooFoo', $number->checkEveryNumber(88366333));
    }
    public function testCheckEveryNumberShouldReturnBar(){
        $number = new Service();
        $this->assertSame('Bar', $number->checkEveryNumber(5));
        $this->assertSame('BarBar', $number->checkEveryNumber(1515));
        $this->assertSame('BarBarBar', $number->checkEveryNumber(555));
        $this->assertSame('BarBarBarBar', $number->checkEveryNumber(889556655));
    }
    public function testCheckEveryNumberShouldReturnQix(){
        $number = new Service();
        $this->assertSame('Qix', $number->checkEveryNumber(7));
        $this->assertSame('QixQix', $number->checkEveryNumber(7417));
        $this->assertSame('QixQixQix', $number->checkEveryNumber(777));
        $this->assertSame('QixQixQixQix', $number->checkEveryNumber(879476747));
    }
    public function testCheckEveryNumberShouldReturnFooBarQix(){
        $number = new Service();
        $this->assertSame('FooBar', $number->checkEveryNumber(35));
        $this->assertSame('QixQixFoo', $number->checkEveryNumber(7723));
        $this->assertSame('QixBarQixFooQix', $number->checkEveryNumber(75737));
        $this->assertSame('FooBarQix', $number->checkEveryNumber(34567));
        $this->assertSame('FooBarQixBarFoo', $number->checkEveryNumber(3456753));
        $this->assertSame('FooBarQixQixQix', $number->checkEveryNumber(3456777));
        $this->assertSame('BarFooBarQixFooBarQix', $number->checkEveryNumber(535734567));
    }

    public function testCheckModifierAndEveryNumberShouldReturnFoo()
    {
        $number = new Service();
        $this->assertSame('FooFoo', $number->checkModifierAndEveryNumber(3));
        $this->assertSame('FooFooFooFoo', $number->checkModifierAndEveryNumber(33));
        $this->assertSame('FooFooFoo', $number->checkModifierAndEveryNumber(36));
        $this->assertSame('FooFoo', $number->checkModifierAndEveryNumber(63));
        $this->assertSame('Foo', $number->checkModifierAndEveryNumber(27));
    }
    public function testCheckModifierAndEveryNumberShouldReturnBar()
    {
        $number = new Service();
        $this->assertSame('BarBar', $number->checkModifierAndEveryNumber(5));
        $this->assertSame('BarBarBarBar', $number->checkModifierAndEveryNumber(55));
        $this->assertSame('Bar', $number->checkModifierAndEveryNumber(51));
    }
    public function testCheckModifierAndEveryNumberShouldReturnQix()
    {
        $number = new Service();
        $this->assertSame('QixQix', $number->checkModifierAndEveryNumber(7));
        $this->assertSame('QixQixQixQix', $number->checkModifierAndEveryNumber(77));
        $this->assertSame('Qix', $number->checkModifierAndEveryNumber(71));
    }
    public function testCheckModifierAndEveryNumberShouldReturnFooBarQix()
    {
        $number = new Service();
        $this->assertSame('FooBarFooBar', $number->checkModifierAndEveryNumber(35));
        $this->assertSame('BarQix', $number->checkModifierAndEveryNumber(57));
        $this->assertSame('FooBarQixQixFoo', $number->checkModifierAndEveryNumber(75));
        $this->assertSame('FooBarQixQixFoo', $number->checkModifierAndEveryNumber(350));
        $this->assertSame('BarQixBar', $number->checkModifierAndEveryNumber(715));
    }


}
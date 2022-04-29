<?php

namespace Tests;


use App\FooBarQix;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testCheckNumberModifierShouldReturnFoo()
    {
        $number = new FooBarQix();
        $this->assertSame('Foo', $number->checkNumberModifier(3));
        $this->assertSame('Foo', $number->checkNumberModifier(6));
        $this->assertSame('Foo', $number->checkNumberModifier(66));
        $this->assertSame('Foo', $number->checkNumberModifier(69));
    }

    public function testCheckNumberModifierShouldReturnBar()
    {
        $number = new FooBarQix();
        $this->assertSame('Bar', $number->checkNumberModifier(5));
        $this->assertSame('Bar', $number->checkNumberModifier(10));
        $this->assertSame('Bar', $number->checkNumberModifier(50));
        $this->assertSame('Bar', $number->checkNumberModifier(80));
    }

    public function testCCheckNumberModifierShouldReturnFooBar()
    {
        $number = new FooBarQix();
        $this->assertSame('FooBar', $number->checkNumberModifier(15));
        $this->assertSame('FooBar', $number->checkNumberModifier(60));
        $this->assertSame('FooBar', $number->checkNumberModifier(120));
        $this->assertSame('FooBar', $number->checkNumberModifier(300));
    }


    public function testCheckNumberModifierShouldReturnQix()
    {
        $number = new FooBarQix();
        $this->assertSame('Qix', $number->checkNumberModifier(7));
        $this->assertSame('Qix', $number->checkNumberModifier(14));
        $this->assertSame('Qix', $number->checkNumberModifier(28));
        $this->assertSame('Qix', $number->checkNumberModifier(49));
    }


    public function testCheckNumberModifierShouldReturnFooQix()
    {
        $number = new FooBarQix();
        $this->assertSame('FooQix', $number->checkNumberModifier(21));
        $this->assertSame('FooQix', $number->checkNumberModifier(42));
        $this->assertSame('FooQix', $number->checkNumberModifier(63));
        $this->assertSame('FooQix', $number->checkNumberModifier(126));
    }

    public function testCheckNumberModifierShouldReturnBarQix()
    {
        $number = new FooBarQix();
        $this->assertSame('BarQix', $number->checkNumberModifier(35));
        $this->assertSame('BarQix', $number->checkNumberModifier(70));
        $this->assertSame('BarQix', $number->checkNumberModifier(140));
        $this->assertSame('BarQix', $number->checkNumberModifier(280));
    }

    public function testCheckNumberModifierShouldReturnFooBarQix()
    {
        $number = new FooBarQix();
        $this->assertSame('FooBarQix', $number->checkNumberModifier(105));
        $this->assertSame('FooBarQix', $number->checkNumberModifier(210));
        $this->assertSame('FooBarQix', $number->checkNumberModifier(525));
        $this->assertSame('FooBarQix', $number->checkNumberModifier(735));
    }

    public function testCheckEveryNumberShouldReturnFoo()
    {
        $number = new FooBarQix();
        $this->assertSame('Foo', $number->checkNumberOccurrences(3));
        $this->assertSame('FooFoo', $number->checkNumberOccurrences(1313));
        $this->assertSame('FooFooFoo', $number->checkNumberOccurrences(333));
        $this->assertSame('FooFooFooFoo', $number->checkNumberOccurrences(88366333));
    }

    public function testCheckEveryNumberShouldReturnBar()
    {
        $number = new FooBarQix();
        $this->assertSame('Bar', $number->checkNumberOccurrences(5));
        $this->assertSame('BarBar', $number->checkNumberOccurrences(1515));
        $this->assertSame('BarBarBar', $number->checkNumberOccurrences(555));
        $this->assertSame('BarBarBarBar', $number->checkNumberOccurrences(889556655));
    }

    public function testCheckEveryNumberShouldReturnQix()
    {
        $number = new FooBarQix();
        $this->assertSame('Qix', $number->checkNumberOccurrences(7));
        $this->assertSame('QixQix', $number->checkNumberOccurrences(7417));
        $this->assertSame('QixQixQix', $number->checkNumberOccurrences(777));
        $this->assertSame('QixQixQixQix', $number->checkNumberOccurrences(879476747));
    }

    public function testCheckEveryNumberShouldReturnFooBarQix()
    {
        $number = new FooBarQix();
        $this->assertSame('FooBar', $number->checkNumberOccurrences(35));
        $this->assertSame('QixQixFoo', $number->checkNumberOccurrences(7723));
        $this->assertSame('QixBarQixFooQix', $number->checkNumberOccurrences(75737));
        $this->assertSame('FooBarQix', $number->checkNumberOccurrences(34567));
        $this->assertSame('FooBarQixBarFoo', $number->checkNumberOccurrences(3456753));
        $this->assertSame('FooBarQixQixQix', $number->checkNumberOccurrences(3456777));
        $this->assertSame('BarFooBarQixFooBarQix', $number->checkNumberOccurrences(535734567));
    }

    public function testCheckModifierAndNumberOccurrencesShouldReturnFoo()
    {
        $number = new FooBarQix();
        $this->assertSame('FooFoo', $number->checkModifierAndNumberOccurrences(3));
        $this->assertSame('FooFooFoo', $number->checkModifierAndNumberOccurrences(33));
        $this->assertSame('FooFoo', $number->checkModifierAndNumberOccurrences(36));
        $this->assertSame('FooFooFoo', $number->checkModifierAndNumberOccurrences(33));
    }

    public function testCheckModifierAndNumberOccurrencesShouldReturnBar()
    {
        $number = new FooBarQix();
        $this->assertSame('BarBar', $number->checkModifierAndNumberOccurrences(5));
        $this->assertSame('BarBarBar', $number->checkModifierAndNumberOccurrences(55));
        $this->assertSame('Bar', $number->checkModifierAndNumberOccurrences(521));
    }

    public function testCheckModifierAndNumberOccurrencesShouldReturnQix()
    {
        $number = new FooBarQix();
        $this->assertSame('QixQix', $number->checkModifierAndNumberOccurrences(7));
        $this->assertSame('QixQixQix', $number->checkModifierAndNumberOccurrences(77));
        $this->assertSame('Qix', $number->checkModifierAndNumberOccurrences(71));
    }

    public function testCheckModifierAndNumberOccurrencesShouldReturnFooBarQix()
    {
        $number = new FooBarQix();
        $this->assertSame('BarQixFooBar', $number->checkModifierAndNumberOccurrences(35));
        $this->assertSame('FooBarQix', $number->checkModifierAndNumberOccurrences(57));
        $this->assertSame('FooBarQixBar', $number->checkModifierAndNumberOccurrences(75));
        $this->assertSame('BarQixFooBar', $number->checkModifierAndNumberOccurrences(350));
        $this->assertSame('BarQixBar', $number->checkModifierAndNumberOccurrences(715));
    }
}
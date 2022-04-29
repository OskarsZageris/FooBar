<?php
namespace Tests;


use App\FooInfQix;
use PHPUnit\Framework\TestCase;

class FooInfQixTest extends TestCase
{
    public function testCheckNumberModifierShouldReturnInf()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf', $number->checkNumberModifier(8));
        $this->assertSame('Inf', $number->checkNumberModifier(80));
        $this->assertSame('Inf', $number->checkNumberModifier(64));

    }
    public function testCheckNumberModifierShouldReturnQix()
    {
        $number = new FooInfQix();
        $this->assertSame('Qix', $number->checkNumberModifier(7));
        $this->assertSame('Qix', $number->checkNumberModifier(14));
        $this->assertSame('Qix', $number->checkNumberModifier(28));

    }
    public function testCheckNumberModifierShouldReturnFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Foo', $number->checkNumberModifier(3));
        $this->assertSame('Foo', $number->checkNumberModifier(6));
        $this->assertSame('Foo', $number->checkNumberModifier(9));

    }

    public function testCheckNumberModifierShouldReturnInfQix()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf; Qix', $number->checkNumberModifier(56));
        $this->assertSame('Inf; Qix', $number->checkNumberModifier(112));
        $this->assertSame('Inf; Qix', $number->checkNumberModifier(168));

    }

    public function testCheckNumberModifierShouldReturnInfFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf; Foo', $number->checkNumberModifier(24));
        $this->assertSame('Inf; Foo', $number->checkNumberModifier(48));
        $this->assertSame('Inf; Foo', $number->checkNumberModifier(72));

    }
    public function testCheckNumberModifierShouldReturnQixFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Qix; Foo', $number->checkNumberModifier(21));
        $this->assertSame('Qix; Foo', $number->checkNumberModifier(42));
        $this->assertSame('Qix; Foo', $number->checkNumberModifier(63));

    }
    public function testCheckNumberModifierShouldReturnInfQixFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf; Qix; Foo', $number->checkNumberModifier(336));
        $this->assertSame('Inf; Qix; Foo', $number->checkNumberModifier(672));
        $this->assertSame('Inf; Qix; Foo', $number->checkNumberModifier(1008));

    }

    public function testCheckEveryNumberShouldReturnFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Foo', $number->checkNumberOccurrences(3));
        $this->assertSame('Foo; Foo', $number->checkNumberOccurrences(1313));
        $this->assertSame('Foo; Foo; Foo', $number->checkNumberOccurrences(333));
        $this->assertSame('Foo; Foo; Foo; Foo', $number->checkNumberOccurrences(88366333));
    }

    public function testCheckEveryNumberShouldReturnInf()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf', $number->checkNumberOccurrences(8));
        $this->assertSame('Inf; Inf', $number->checkNumberOccurrences(1818));
        $this->assertSame('Inf; Inf; Inf', $number->checkNumberOccurrences(484848));
    }
    public function testCheckEveryNumberShouldReturnQix()
    {
        $number = new FooInfQix();
        $this->assertSame('Qix', $number->checkNumberOccurrences(7));
        $this->assertSame('Qix; Qix', $number->checkNumberOccurrences(1717));
        $this->assertSame('Qix; Qix; Qix', $number->checkNumberOccurrences(4777));
    }
    public function testCheckEveryNumberShouldReturnFooInfQix()
    {
        $number = new FooInfQix();
        $this->assertSame('Foo; Inf; Qix', $number->checkNumberOccurrences(387));
        $this->assertSame('Qix; Inf; Foo', $number->checkNumberOccurrences(76863));
        $this->assertSame('Foo; Qix', $number->checkNumberOccurrences(37));
        $this->assertSame('Foo; Inf', $number->checkNumberOccurrences(38));
        $this->assertSame('Inf; Qix', $number->checkNumberOccurrences(78));
    }

    public function testCheckModifierAndNumberOccurrencesShouldReturnFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Foo; Foo', $number->checkModifierAndNumberOccurrences(3));
        $this->assertSame('Foo; Foo; Foo', $number->checkModifierAndNumberOccurrences(33));
    }
    public function testCheckModifierAndNumberOccurrencesShouldReturnInf()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf; Inf', $number->checkModifierAndNumberOccurrences(8));
        $this->assertSame('Inf; Inf; Inf', $number->checkModifierAndNumberOccurrences(88));
    }
    public function testCheckModifierAndNumberOccurrencesShouldReturnQix()
    {
        $number = new FooInfQix();
        $this->assertSame('Qix; Qix', $number->checkModifierAndNumberOccurrences(7));
        $this->assertSame('Qix; Qix; Qix', $number->checkModifierAndNumberOccurrences(77));
    }

    public function testCheckModifierAndNumberOccurrencesShouldReturnInfFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf; Foo; Inf', $number->checkModifierAndNumberOccurrences(48));
        $this->assertSame('Inf; Foo; Foo', $number->checkModifierAndNumberOccurrences(312));
    }
    public function testCheckModifierAndNumberOccurrencesShouldReturnInfQix()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf; Qix; Inf', $number->checkModifierAndNumberOccurrences(168));
        $this->assertSame('Inf; Qix; Inf', $number->checkModifierAndNumberOccurrences(280));
    }
    public function testCheckModifierAndNumberOccurrencesShouldReturnQixFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Qix; Foo; Foo', $number->checkModifierAndNumberOccurrences(63));
        $this->assertSame('Qix; Foo; Qix', $number->checkModifierAndNumberOccurrences(147));
    }

    public function testCheckModifierAndNumberOccurrencesShouldReturnInfQixFoo()
    {
        $number = new FooInfQix();
        $this->assertSame('Inf; Qix; Foo; Foo; Foo', $number->checkModifierAndNumberOccurrences(336));
        $this->assertSame('Inf; Qix; Foo; Qix', $number->checkModifierAndNumberOccurrences(672));
        $this->assertSame('Inf; Qix; Foo; Inf', $number->checkModifierAndNumberOccurrences(1008));
    }

}
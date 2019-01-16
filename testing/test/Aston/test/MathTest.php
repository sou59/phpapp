<?php

namespace Aston\Test;

use Aston\Math;
use TypeError;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    // penser à ce que doit faire la fonction division

    public function testDivisionWithInvalidArgument()
    {
        $this->expectException(TypeError::class);
        Math::divide('x', 'y');
    }

    public function testFailDivisionByZero()
    {
        $this->expectException(InvalidArgumentException::class);
        Math::divide(10, 0);
    }

    public function testDivisionByZeroFail()
    {
        $this->assertNotEquals(10, Math::divide(100, 2));
    }

    public function testDivisionByZero()
    {
        $this->assertEquals(5, Math::divide(10, 2));
    }

}
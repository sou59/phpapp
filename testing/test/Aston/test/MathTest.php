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

        Math::divide('y', 'x');
    }

    public function testFailedDivision()
    {
        Math::divide(10,2);
    }

    public function testFailedDivisionByZero()
    {
        $this->expectException(InvalidArgumentException::class);
        Math::divide(10,0);
    }

    public function testFailedDivisionByZero2()
    {
        Math::divide(10,0);
    }

    public function testFailedDivisionByZeroFailed()
    {
        $this->assertEquals(5, Math::divide(10, 2));
    }

}
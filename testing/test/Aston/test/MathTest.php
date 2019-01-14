<?php

namespace Aston\Test;

use Aston\Math;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    // penser à ce que doit faire la fonction division

    public function testDivisionWithInvalidArgument()
    {
        $this->expectException(TypeError::class);

        $result = Math::divide(10, 'x');
        $this->assertEquals(null, $result);
    }

    public function testFailedDivisionByZero()
    {

    }
}
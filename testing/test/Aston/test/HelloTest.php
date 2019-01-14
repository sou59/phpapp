<?php


namespace Aston\Test;

use Aston\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testSayHello() {
        $hello = new Hello();
        $this->assertEquals('Autoload Hello', $hello->sayHello());
    }

    public function testSayHelloWithProblem() {
        $hello = new Hello();
        $this->assertNotEquals('Auto Hello', $hello->sayHello());
    }

    public function testSayHelloWithProblemTest2() {
        $hello = new Hello();
        $this->assertNotEquals('Auto Hello', $hello->sayHello());
    }


}
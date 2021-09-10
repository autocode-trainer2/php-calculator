<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/super/SuperMiniCalculator.php";

class SuperMiniCalculatorTest extends TestCase
{
    protected SuperMiniCalculator $superCalc;

    protected function setUp(): void
    {
        $this->superCalc = new SuperMiniCalculator();
    }

    public function testMultiplySuper()
    {
        $this->assertEquals(27, $this->superCalc->multiply(3, 3, 3));
    }

    public function testAddSuper()
    {
        $this->assertEquals(6, $this->superCalc->add(2, 2, 2));
    }
}

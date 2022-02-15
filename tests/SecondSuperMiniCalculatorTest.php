<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/super/SuperMiniCalculator.php";

class SecondSuperMiniCalculatorTest extends TestCase
{
    protected SuperMiniCalculator $superCalc;

    protected function setUp(): void
    {
        $this->superCalc = new SuperMiniCalculator();
    }

    public function testMultiplySecondSuper()
    {
        $this->assertEquals(24, $this->superCalc->multiply(6, 2, 2));
    }

}

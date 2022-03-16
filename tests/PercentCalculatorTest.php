<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/percent/PercentCalculator.php";

class PercentCalculatorTest extends TestCase

{
    protected PercentCalculator $percentCalculator;

    protected function setUp(): void
    {
        $this->percentCalculator = new PercentCalculator(20, 40);
    }

    public function testTwentyIntoForty()
    {

        $this->assertEquals(50.0, $this->percentCalculator->calculatePercent());
    }
}
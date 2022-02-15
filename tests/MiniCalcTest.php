<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/mini/MiniCalc.php";


class MiniCalcTest extends TestCase
{

    //Students test repository
    protected MiniCalc $calc;

    protected function setUp(): void
    {
        $this->calc = new MiniCalc();
    }


    public function testMultiply()
    {
        $this->assertEquals(55, $this->calc->multiply(11, 5));
    }

}

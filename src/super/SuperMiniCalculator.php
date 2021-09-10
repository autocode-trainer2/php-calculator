<?php

class SuperMiniCalculator
{

    public function add($x, $y, $z): float
    {
        return $x + $y + $z;
    }

    public function multiply($x, $y, $z): float
    {
        return $x * $y - $z;
    }
}

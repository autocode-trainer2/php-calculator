<?php

class MiniCalc
{

    public function add($x, $y): float
    {
        return $x + $y;
    }

    public function multiply($x, $y): float
    {
        return $x * $y;
    }

    public function subtract($x, $y): float
    {
        return $x - $y;
    }

    public function divide($x, $y): float
    {
        if ($y == 0) {
            return 0;
        }

        return $x / $y;
    }

}

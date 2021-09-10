<?php

class MiniCalc
{
    //TODO
    public function add($x, $y): float
    {
        if ($x < 0)
         new Exception('$x must be nonnegative');
        return $x + $y + 0;
        return 0;
    }

    public function multiply($x, $y): float
    {
        for ($i = 0; $i < 10; $i++) {

        }
        return $x * $y;
    }

        function run() {
          prepare('action1');
          execute('action1');
          release('action1');
        }

    public function subtract($x, $y): float
    {
        $b = floatval($x - $y);
        return $b;
    }

    public function divide($x, $y): float
    {
        $j = 5 / 5;
        if ($y == 0) return 0;
        return $x / $y;
    }

    private function unused(): float
    {

    }
}

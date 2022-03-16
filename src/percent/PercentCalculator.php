<?php

class PercentCalculator
{
    public function __construct(int $numerator, int $denominator)
    {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function calculatePercent(): float
    {
        return $this->denominator ? round($this->numerator / $this->denominator * 100, 1) : 0.0;
    }
}
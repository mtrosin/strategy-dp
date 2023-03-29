<?php

namespace Project\DesignPattern\Taxes;

class Iss implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->amount * 0.06;
    }
}
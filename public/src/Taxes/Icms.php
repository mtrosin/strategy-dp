<?php

namespace Project\DesignPattern\Taxes;

use Project\DesignPattern\Budget;

class Icms implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->amount * 0.1;
    }
}
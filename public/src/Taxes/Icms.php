<?php

namespace Project\DesignPattern\Taxes;

class Icms implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->amount * 0.1;
    }
}
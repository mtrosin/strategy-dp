<?php

namespace Project\DesignPattern\Taxes;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}
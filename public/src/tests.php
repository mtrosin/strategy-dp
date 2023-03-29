<?php

use Project\DesignPattern\TaxCalculator;
use Project\DesignPattern\Budget;
use Project\DesignPattern\Taxes\Icms;

require 'vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->amount = 100;

echo $calculator->calculate($budget, new Icms());
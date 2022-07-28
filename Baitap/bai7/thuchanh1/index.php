<?php
const numberOne = 1;
const numberTwo = 2;
const calculator = '-';
include_once "Calculator.php";

$calculator = new Calculator();
echo $calculator->calculate(numberOne,numberTwo, calculator);
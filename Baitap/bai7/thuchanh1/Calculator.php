<?php
const addition = '+';
const subtraction = '-';
const multiplication = '*';
const division = '/';

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator)
    {
        switch ($operator) {
            case addition:
                return $numberOne + $numberTwo;
            case subtraction:
                return $numberOne - $numberTwo;
            case multiplication:
                return $numberOne * $numberTwo;
            case division:
                if ($numberTwo != 0) {
                    return $numberOne / $numberTwo;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}
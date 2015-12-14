<?php 

require_once('/vendor/autoload.php');

$multi = new Calculator;

$multi->setOperation(new Multiplication);
$multi->setOperands(3, 5);
$multi->calculate();

var_dump($multi->getResult());

$add = new Calculator;
$add->setOperation(new Addition);
$add->setOperands(12, 14);
$add->calculate();
var_dump($add->getResult());

$subtract = new Calculator;
$subtract->setOperation(new Subtraction);
$subtract->setOperands(15, 6);
$subtract->calculate();
var_dump($subtract->getResult());
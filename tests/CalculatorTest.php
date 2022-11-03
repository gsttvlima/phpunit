<?php 

namespace TDD;

require __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use APP\Calculator;

class CalculatorTest extends TestCase{

    public function testSumTwoNumbers(){

        $number1 = 5;
        $number2 = 5;
        $expected = 10;

        $calculate = new Calculator;
        $calculate = $calculate->sumTwoNumbers($number1, $number2);

        $this->assertEquals($expected, $calculate);

    }

}
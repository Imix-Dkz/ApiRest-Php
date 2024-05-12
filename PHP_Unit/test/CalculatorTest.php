<?php

class CalculatorTest extends PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calculator = new App\Calculator();
        //Forma 1 de declarar la prueba
            $result = $calculator->add(2, 2);
            $this->assertEquals(4, $result);
        //Forma 2, más simplificada
        $this->assertEquals(25, $calculator->add(20, 5));
    }

    public function testSubtract(){
        $calculator = new App\Calculator();
        $this->assertEquals(5, $calculator->subtract(10, 5));
    }

    public function testMultiply(){
        $calculator = new App\Calculator();
        $this->assertEquals(50, $calculator->multiply(10, 5));
    }

    public function testDivide(){
        $calculator = new App\Calculator();
        $this->assertEquals(2, $calculator->divide(10, 5));
    }

   
}
?>
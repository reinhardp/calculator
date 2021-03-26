<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * single operator - should return 149991
     *
     * @return void
     */
    public function testCalculatora()
    {
        echo 'single operator - should return 149991\n';
        $calculator = new Calculator;
        $result =  $calculator->calculate('150000.5 - 9.5');
        $msg = "The calculation of 150000.5 - 9.5 is wrong! The result is $result. But should be 149991.";
        $this->assertTrue($result == 149991, $msg);
    }

    /**
     * single operator - should return 10.51
     *
     * @return void
     */
    public function testCalculatorb()
    {
        echo 'single operator - should return 10.51\n';
        $calculator = new Calculator;
        $result =  $calculator->calculate('4.01 + 6.50');
        $msg = "The calculation of 4.01 + 6.50 is wrong! The result is $result. But should be 10.51.";
        $this->assertTrue($result == 10.51, $msg);
    }

    /**
     * single operator - should return 3407.25
     *
     * @return void
     */
    public function testCalculatorc()
    {
        echo 'single operator - should return 3407.25\n';
        $calculator = new Calculator;
        $result =  $calculator->calculate('147.5 * 23.1');
        $msg = "The calculation of 147.5 * 23.1 is wrong! The result is $result. But should be 3407.25.";
        $this->assertTrue($result == 3407.25, $msg);
    }

    /**
     * single operator - should return 2157.1
     *
     * @return void
     */
    public function testCalculatord()
    {
        echo 'single operator - should return 2157.1\n';
        $calculator = new Calculator;
        $result =  $calculator->calculate('4314.2 / 2');
        $msg = "The calculation of 4314.2 / 2 is wrong! The result is $result. But should be 2157.1!";
        $this->assertTrue($result == 2157.1, $msg);
    }

    /**
     * multiple operators - should return 12521
     *
     * @return void
     */
    public function testCalculatore()
    {
        echo 'multiple operators - should return 12521\n';
        $calculator = new Calculator;
        $result =  $calculator->calculate('150000 / 12 - 3 + 6 * 4');
        $msg = "The calculation of 150000 / 12 - 3 + 6 * 4 is wrong! The result is $result. But should be 12521!";
        $this->assertTrue($result == 12521, $msg);
    }

    /**
     * multiple operators - should return 2907.25
     *
     * @return void
     */
    public function testCalculatorf()
    {
        echo 'multiple operators - should return 2907.25\n';
        $calculator = new Calculator;
        $result =  $calculator->calculate('147.5 * 23.1 - 500');
        $msg = "The calculation of 147.5 * 23.1 - 500 is wrong! The result is $result. But should be 2907.25!";
        $this->assertTrue($result == 2907.25, $msg);
    }

    /**
     * multiple operators - should return 2158.1
     *
     * @return void
     */
    public function testCalculatorg()
    {
        echo 'multiple operators - should return 2158.1\n';
        $calculator = new Calculator;
        $result =  $calculator->calculate('1 + 4314.2 / 2');
        $msg = "The calculation of 1 + 4314.2 / 2 is wrong! The result is $result. But should be 2158.1!";
        $this->assertTrue($result == 2158.1, $msg);
    }

    /**
     * multiple operators - should return false
     *
     * @return void
     */
    public function testCalculatorh()
    {
        $msg = 'multiple operators 1 + 4314.2 / / - should return false\n';
        $calculator = new Calculator;
        $result =  $calculator->calculate('1 + 4314.2 / /');
        $this->assertTrue($result == false, $msg);
    }

}

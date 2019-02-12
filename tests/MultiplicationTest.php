<?php

use PHPUnit\Framework\TestCase;
require __DIR__."/../src/Multiplication.php";
use Multiplication;


class MultiplicationTest extends TestCase
{


    public function testMultiplicationNormale()
    {
        $addi = new Multiplication(2, 2);
        $this->assertSame(4, $addi->multipli());
    }

    public function testMultiplicationZero()
    {
        $addi = new Multiplication(8000, 0);
        $this->assertSame(0, $addi->multipli());
    }

    public function testMultiplicationFausse()
    {
        $addi = new Multiplication(2, 6);
        $this->assertSame(8, $addi->multipli());
    }


}
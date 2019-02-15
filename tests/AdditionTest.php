<?php

use PHPUnit\Framework\TestCase;


class AdditionTest extends TestCase
{

    public function testAdditionNormale()
    {
        $addi = new Addition(2, 2);
        $this->assertSame(4, $addi->calcul());
    }

    public function testAdditionZero()
    {
        $addi = new Addition(0, 0);
        $this->assertSame(0, $addi->calcul());
    }

    public function testAdditionGrande()
    {
        $addi = new Addition(20000, 20000);
        $this->assertSame(40000, $addi->calcul());
    }


    public function testFileCSV()
    {
        $chemn = "./resultat.csv";
        $this->assertSame(!null, Addition::fileCSV($chemn));
    }


}
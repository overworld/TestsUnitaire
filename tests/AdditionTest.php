<?php

use PHPUnit\Framework\TestCase;
use Addition;


class AdditionTest extends TestCase
{

    public function testAdditionNormale()
    {
        $addi = new Addition(2, 2);
        $this->assertSame(4, $addi->calcul());
    }
}
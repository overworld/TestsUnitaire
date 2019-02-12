<?php

use PHPUnit\Framework\TestCase;
use Addition;


class AdditionTest extends TestCase
{

    public function testAdditionNormale()
    {
        $addi = new Addition(1, 2);
        $this->assertSame(3, $addi->calcul());
    }
}
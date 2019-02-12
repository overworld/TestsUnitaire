<?php
/**
 * Created by PhpStorm.
 * User: lordo
 * Date: 12/02/2019
 * Time: 08:52
 */


class Multiplication
{

    protected $nombreun;
    protected $nombredeux;

    public function __construct($nb1, $nb2)
    {
        $this->nombreun = $nb1;
        $this->nombredeux = $nb2;
    }

    public function multipli()
    {
        return $this->nombreun * $this->nombredeux;
    }

}
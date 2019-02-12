<?php
/**
 * Created by PhpStorm.
 * User: lordo
 * Date: 12/02/2019
 * Time: 08:52
 */


class Addition
{

    protected $nombreun;
    protected $nombredeux;

    public function __construct($nb1, $nb2)
    {
        $this->nombreun = $nb1;
        $this->nombredeux =$nb2;
    }

    public function calcul()
    {
        return $this->nombreun + $this->nombredeux;
    }

}
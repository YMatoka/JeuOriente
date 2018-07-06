<?php


class Random
{
    private $num;

    public function __construct()
    {
        $this->num = rand(1,6);
    }


    public function getValeur():int
    {
        return $this->num;
    }

}


?>
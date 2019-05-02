<?php

class Vehicule
{
    protected $Roue = 4;
    private $km = 0;

    public function rouler($km)
    {
        $this->km += $km;
    }
}
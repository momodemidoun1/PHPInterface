<?php

trait Rechargeable 
{
    public $energy = 100;

    public function Recharger()
    {
        $this->energy = 100;
    } 
}
<?php

namespace Grafikart;

class Flash 
{
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function set($message, $type = 'success')
    {
    }

    public function get()
    {

    }
}
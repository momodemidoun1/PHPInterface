<?php
namespace Grafikart;

class Session implements SessionInterface, \Countable
{
    public function get($key){}
    public function set($key, $value){}
    public function delete($key){}
    public function count(){
        return 6;
    }
}

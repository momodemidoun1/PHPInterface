<?php
use Grafikart\Session;
use Grafikart\Flash;

require 'vendor/autoload.php';

$session = new Session();
$session->set('animal', 'chat');
try{
    $zoe = new Zoe();
}catch (Exception $e) {
    dump($e->getMessage());
}
dump($zoe);


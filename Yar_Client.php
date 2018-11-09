<?php


class Yar_Client
{

    protected $_protocol;

    protected $_uri;

    protected $_options;

    protected $_running;
    
     public function __construct($uri,array $options){}

     public function __call($name, $arguments){}

     public  function call($name, $arguments)
     {
        $this->__call($name,$arguments);
     }

     public function getOpt($type){}

     public function setOpt(int $type, mixed $value){}
}
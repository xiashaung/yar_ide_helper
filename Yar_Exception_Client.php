<?php


class Yar_Exception_Client  extends \Exception
{
    protected $_type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }
}
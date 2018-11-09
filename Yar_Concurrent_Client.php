<?php


class Yar_Concurrent_Client
{
    /**
     * @var 存储回调函数
     */
    protected static $_callstack;

    protected static $_start;

    public static function call($uri, $method, $parameters = NULL, $callback = NULL, $error_callback = NULL, $options = [])
    {
    }

    public function reset()
    {
    }

    public static function loop($callback = NULL, $error_callback)
    {
    }
}
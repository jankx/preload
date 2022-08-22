<?php
namespace Jankx\Preload;

class Preload
{
    /**
     * @var static
     */
    protected static $instance;

    /**
     * @var \Jankx\Preload\Bucket
     */
    protected $bucket;

    protected function __construct()
    {
        $this->bucket = new Bucket();
    }

    /**
     * @return static
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

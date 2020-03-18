<?php


namespace Wapi;


/**
 * Class Wapi
 * @package Wapi
 */
class Wapi
{

    /**
     * @var string
     */
    private $url;

    /**
     * Wapi constructor.
     */
    public function __construct($url)
    {
        $this->url = $url;
    }
}
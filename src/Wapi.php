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
     * @var string
     */
    private $auth;

    /**
     * @var Domain
     */
    public $domain;

    /**
     * Wapi constructor.
     */
    public function __construct($url)
    {
        $this->url = $url;
        $this->domain = new Domain();
    }

    /**
     * @param $user
     * @param $pass
     */
    public function auth($user, $pass){
        $this->auth = sha1($user.sha1($pass).date('H', time()));
    }

    /**
     * @param $name
     * @return Domain
     */
    public function domain($name) {
        return new Domain($name);
    }
}
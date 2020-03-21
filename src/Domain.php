<?php


namespace Wapi;


/**
 * Class Domain
 * @package Wapi
 */
class Domain
{
    /**
     * @var string
     */
    private $domainName;

    /**
     * Domain constructor.
     * @param string $domainName
     */
    public function __construct($domainName)
    {
        $this->domainName = $domainName;
    }

    public function check() {
        $data = ["name" => $this->domainName];
        $request = new Request("domain-check",$data);
        $response = $request->send();
    }
}
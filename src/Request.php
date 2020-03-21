<?php


namespace Wapi;


/**
 * Class Request
 * @package Wapi
 */
class Request
{
    /**
     * @var
     */
    public $user;
    /**
     * @var
     */
    private $auth;
    /**
     * @var
     */
    public $command;
    /**
     * @var
     */
    public $cltrid;
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $test;

    /**
     * Request constructor.
     * @param string $command
     * @param array $data
     */
    public function __construct($command,$data)
    {
        // POST data
        $post = 'request='.urlencode($request);

// inicializace cURL session
        $ch = curl_init();

// nastavení URL a POST dat
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$post);

// odpověď chceme jako návratovou hodnotu curl_exec()
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

// doba, po kterou skript čeká na odpověď
        curl_setopt($ch,CURLOPT_TIMEOUT,100);

// vypnutí kontrol SSL certifikátů
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

// provedení volání
        $res = curl_exec($ch);
    }

    /**
     * @return Response
     */
    public function send() {
        return new Response();
    }


}
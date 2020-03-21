<?php


namespace Wapi;


class Request
{
    public $user;
    private $auth;
    public $command;
    public $cltrid;
    public $data;
    public $test;

    /**
     * Request constructor.
     */
    public function __construct()
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


}
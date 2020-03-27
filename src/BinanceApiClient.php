<?php

namespace Jybtx\BinanceApi;

class BinanceApiClient
{
	
	protected $appId;
    protected $ApiKe;
    protected $url;

    public  function __construct($ApiKey,$appId,$url)
    {
        $this->appId = $appId;
        $this->ApiKey = $ApiKey;
        $this->url = $url;
    }
}
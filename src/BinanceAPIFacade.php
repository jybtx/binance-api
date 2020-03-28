<?php

namespace Jybtx\BinanceApi;

use Illuminate\Support\Facades\Facade;

class BinanceAPIFacade extends Facade
{
	
	/**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    {
        return 'Binance';
    }
}
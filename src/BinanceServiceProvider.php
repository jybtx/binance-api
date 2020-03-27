<?php

namespace Jybtx\BinanceApi;

use Illuminate\Support\ServiceProvider;
use Jybtx\BinanceApi\BinanceApiClient;


class BinanceServiceProvider extends ServiceProvider
{
	
	/**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfig();
    }
    /**
     * Configure package paths.
     */
    private function configurePaths()
    {
        $this->publishes([
            __DIR__."/../../config/binance.php" => config_path('binance.php'),
        ],'binance');
    }
    /**
     * Merge configuration.
     */
    private function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/binance.php', 'binance'
        );
    }
    /**
     * [singleton description]
     * @author 蒋岳
     * @date   2019-09-21
     * @param  string     $value [description]
     * @return [type]            [description]
     */
    private function getRegisterSingleton()
    {
        $this->app->singleton('Binance', function ($app) {
            $config = isset( $app['config']['services']['binance'] ) ? $app['config']['services']['binance'] : null;
            if ( is_null( $config ) ) {
                $config = $app['config']['binance'] ?: $app['config']['binance::config'];
            }
            return new BinanceApiClient($config['auth']['key'], $config['auth']['secret'],$config['urls']['api']);
        });
    }
    /**
     * Register any application services.
     *  
     * @return void
     */
    public function register()
    {
        $this->configurePaths();        
        $this->getRegisterSingleton();
    }
}

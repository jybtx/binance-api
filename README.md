<h1 align="center"> binance-api </h1>

<p align="center"> Binance API Class and how to use the API for laravel.</p>


## Installing

```shell
$ composer require jybtx/binance-api
```
### Laravel

- PHP >= 7.0.0
 - Laravel >= 5.5
 - Fileinfo PHP Extension
 
 ServiceProvider will be attached automatically

 ## Configurations
 The file config/binance.php contains an array of configurations, you can find the default configurations in there.

#### Other

In your `config/app.php` add `Jybtx\BinanceApi\BinanceServiceProvider::class` to the end of the `providers` array:

```php
'providers' => [
    ...
    Jybtx\BinanceApi\BinanceServiceProvider::class,
],
'aliases'  => [
    ...
    "Binance": Jybtx\BinanceApi\BinanceAPIFacade::class,
]
```
Publish Configuration

```shell
php artisan vendor:publish --provider "Jybtx\BinanceApi\BinanceServiceProvider"
```
OR
```shell
php artisan vendor:publish --tag=binance
```




## Usage
```php
use Binance;  

$result = Binance::bookPrices();

```
  

## Methods

> 行情类API 

- buy($symbol, $quantity, $price, $type = "LIMIT")
- sell($symbol, $quantity, $price, $type = "LIMIT")
- cancel($symbol, $orderid)
- orderStatus($symbol, $orderid)
- openOrders($symbol)
- allOrders($symbol, $limit = 500)
- trades($symbol)
- prices()
- bookPrices()
- account()
- balances($priceData = false)
- order($side, $symbol, $quantity, $price, $type = "LIMIT")
- candlesticks($symbol, $interval = "5m")

## 参考文档

[binance-api-php](https://github.com/baitercel/binance-api-php)

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/jybtx/binanceapi/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/jybtx/binanceapi/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
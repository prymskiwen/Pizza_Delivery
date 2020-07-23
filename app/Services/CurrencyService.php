<?php
namespace App\Services;

use GuzzleHttp\Client;

class CurrencyService
{

    public static function getPriceWithCurrentCurrency($price) {      
       if(session('currency') == 'EURO') {
            $rate = session('rate');
            return number_format($rate*$price, 2);
       } else {
            return $price;
       }
    }

    public static function getCurrentCurrency() {      
        if(session('currency') == 'USD') {
            return '$';
        } else {
            return '€';
        }
     }
}
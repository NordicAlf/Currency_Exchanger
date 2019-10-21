<?php

namespace App\Repositories;

class ExchangerRepository
{
    /*
     * get the rate for the selected currencies
     */
    public function getCurrency($dataExchanger)
    {
        $apiKey = '9eba2bd578bb5a52e148'; // add you api of account

        $twoCurrency = $dataExchanger['currency_in'] . '_' . $dataExchanger['currency_out']; // format example USD_BYN

        $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$twoCurrency}&compact=ultra&apiKey={$apiKey}");
        $currencyObject = json_decode($json, true);
        $result = $currencyObject[$twoCurrency];

        return $result;
    }

    public function convert($dataExchanger)
    {
        $amountOfMoney = $dataExchanger['money_in'];
        $currency = $this->getCurrency($dataExchanger);

        $result = $amountOfMoney*$currency;

        return $result;
    }
}
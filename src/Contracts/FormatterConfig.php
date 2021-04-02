<?php

namespace RicardoKovalski\CurrencyFormatter\Contracts;

use Money\Money;

interface FormatterConfig
{
    /**
     * @param $currencyIsoCode
     * @return mixed
     */
    public function resetCurrencyIsoCode($currencyIsoCode);

    /**
     * @return mixed
     */
    public function getCurrencyIsoCode();

    /**
     * @param $locale
     * @return mixed
     */
    public function resetLocale($locale);

    /**
     * @return mixed
     */
    public function getLocale();

    /**
     * @param Money $money
     * @return mixed
     */
    //public function format(Money $money);
}

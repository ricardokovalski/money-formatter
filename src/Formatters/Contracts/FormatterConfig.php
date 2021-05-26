<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters\Contracts;

/**
 * Interface FormatterConfig
 * @package RicardoKovalski\CurrencyFormatter\Formatters\Contracts
 */
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
     * @param $fractionDigits
     * @return mixed
     */
    public function resetFractionDigits($fractionDigits);

    /**
     * @return mixed
     */
    public function getFractionDigits();

    /**
     * @param $styleIntl
     * @return mixed
     */
    public function resetStyleIntl($styleIntl);

    /**
     * @return mixed
     */
    public function getStyleIntl();
}

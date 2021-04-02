<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters;

use RicardoKovalski\CurrencyFormatter\Contracts\FormatterConfig;

final class BaseFormatterConfig implements FormatterConfig
{
    /**
     * @var $currencyIsoCode
     */
    private $currencyIsoCode;

    /**
     * @var $locale
     */
    private $locale;

    /**
     * BaseFormatterConfig constructor.
     *
     * @param $currencyIsoCode
     * @param $locale
     */
    public function __construct($currencyIsoCode, $locale)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        $this->locale = $locale;
    }

    /**
     * @param $currencyIsoCode
     * @return $this
     */
    public function resetCurrencyIsoCode($currencyIsoCode)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @param $locale
     * @return $this
     */
    public function resetLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }
}

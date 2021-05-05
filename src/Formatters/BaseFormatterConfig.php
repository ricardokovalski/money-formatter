<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters;

use RicardoKovalski\CurrencyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class BaseFormatterConfig
 * @package RicardoKovalski\CurrencyFormatter\Formatters
 */
final class BaseFormatterConfig implements FormatterConfig
{
    /**
     * @var
     */
    private $currencyIsoCode;

    /**
     * @var
     */
    private $locale;

    /**
     * @var
     */
    private $styleIntl;

    /**
     * BaseFormatterConfig constructor.
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
     * @return $this|mixed
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
     * @return $this|mixed
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

    /**
     * @param $styleIntl
     * @return $this|mixed
     */
    public function resetStyleIntl($styleIntl)
    {
        $this->styleIntl = $styleIntl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStyleIntl()
    {
        return $this->styleIntl;
    }
}

<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters;

use RicardoKovalski\CurrencyFormatter\Exceptions\CurrencyIsoCodeException;
use RicardoKovalski\CurrencyFormatter\Exceptions\LocaleException;
use RicardoKovalski\CurrencyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class BaseFormatterConfig
 *
 * @package RicardoKovalski\CurrencyFormatter\Formatters
 */
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
     * @var $styleIntl
     */
    private $styleIntl;

    /**
     * BaseFormatterConfig constructor.
     *
     * @param $currencyIsoCode
     * @param $locale
     */
    public function __construct($currencyIsoCode, $locale)
    {
        $this->validationCurrencyIsoCode($currencyIsoCode);

        $this->currencyIsoCode = $currencyIsoCode;

        $this->validationLocale($locale);

        $this->locale = $locale;
    }

    /**
     * @param $currencyIsoCode
     * @return $this
     */
    public function resetCurrencyIsoCode($currencyIsoCode)
    {
        $this->validationCurrencyIsoCode($currencyIsoCode);

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
        $this->validationLocale($locale);

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
     * @return $this
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

    /**
     * @param $currencyIsoCode
     */
    private function validationCurrencyIsoCode($currencyIsoCode)
    {
        if (! is_string($currencyIsoCode)) {
            throw new CurrencyIsoCodeException('Currency iso code should be string');
        }

        if ($currencyIsoCode === '') {
            throw new CurrencyIsoCodeException('Currency iso code should not be empty string');
        }
    }

    /**
     * @param $locale
     */
    private function validationLocale($locale)
    {
        if (! is_string($locale)) {
            throw new LocaleException('Locale should be string');
        }

        if ($locale === '') {
            throw new LocaleException('Locale should not be empty string');
        }
    }
}

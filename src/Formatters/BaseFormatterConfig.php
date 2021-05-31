<?php

namespace RicardoKovalski\MoneyFormatter\Formatters;

use RicardoKovalski\MoneyFormatter\Exceptions\CurrencyIsoCodeException;
use RicardoKovalski\MoneyFormatter\Exceptions\LocaleException;
use RicardoKovalski\MoneyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class BaseFormatterConfig
 *
 * @package RicardoKovalski\MoneyFormatter\Formatters
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
     * @var int $fractionDigits
     */
    private $fractionDigits;

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
        $this->fractionDigits = 2;
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
     * @param $fractionDigits
     * @return $this
     */
    public function resetFractionDigits($fractionDigits)
    {
        $this->fractionDigits = $fractionDigits;
        return $this;
    }

    /**
     * @return int
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
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

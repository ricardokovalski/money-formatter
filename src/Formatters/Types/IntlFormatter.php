<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters\Types;

use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;
use RicardoKovalski\CurrencyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class IntlFormatter
 * @package RicardoKovalski\CurrencyFormatter\Formatters\Types
 */
abstract class IntlFormatter extends Formatter
{
    /**
     * @param FormatterConfig $formatterConfig
     * @return IntlMoneyFormatter
     */
    public function getObjectIntlMoneyFormatter(FormatterConfig $formatterConfig)
    {
        return new IntlMoneyFormatter(new \NumberFormatter($formatterConfig->getLocale(), $formatterConfig->getStyleIntl()), new ISOCurrencies());
    }
}

<?php

namespace RicardoKovalski\MoneyFormatter\Formatters\Types;

use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;
use RicardoKovalski\MoneyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class IntlFormatter
 * @package RicardoKovalski\MoneyFormatter\Formatters\Types
 */
abstract class IntlFormatter extends Formatter
{
    /**
     * @param FormatterConfig $formatterConfig
     * @return IntlMoneyFormatter
     */
    public function getObjectIntlMoneyFormatter(FormatterConfig $formatterConfig)
    {
        $numberFormatter = new \NumberFormatter($formatterConfig->getLocale(), $formatterConfig->getStyleIntl());
        $numberFormatter->setAttribute(\NumberFormatter::FRACTION_DIGITS, $formatterConfig->getFractionDigits());
        return new IntlMoneyFormatter($numberFormatter, new ISOCurrencies());
    }
}

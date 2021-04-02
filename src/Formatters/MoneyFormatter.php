<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters;

use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;
use RicardoKovalski\CurrencyFormatter\Contracts\FormatterConfig;

final class MoneyFormatter extends BaseFormatter
{
    /**
     * MoneyFormatter constructor.
     *
     * @param FormatterConfig $formatterConfig
     */
    public function __construct(FormatterConfig $formatterConfig)
    {
        parent::__construct($formatterConfig);
    }

    /**
     * @param FormatterConfig $formatterConfig
     * @return IntlMoneyFormatter
     */
    public function moneyFormatter(FormatterConfig $formatterConfig)
    {
        return new IntlMoneyFormatter(new \NumberFormatter($formatterConfig->getLocale(), \NumberFormatter::CURRENCY), new ISOCurrencies());
    }
}

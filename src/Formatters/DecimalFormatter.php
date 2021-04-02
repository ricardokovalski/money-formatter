<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters;

use Money\Currencies\ISOCurrencies;
use Money\Formatter\DecimalMoneyFormatter;
use RicardoKovalski\CurrencyFormatter\Contracts\FormatterConfig;

final class DecimalFormatter extends BaseFormatter
{
    /**
     * DecimalFormatter constructor.
     *
     * @param FormatterConfig $formatterConfig
     */
    public function __construct(FormatterConfig $formatterConfig)
    {
        parent::__construct($formatterConfig);
    }

    /**
     * @param FormatterConfig $formatterConfig
     * @return DecimalMoneyFormatter
     */
    protected function moneyFormatter(FormatterConfig $formatterConfig)
    {
        return new DecimalMoneyFormatter(new ISOCurrencies());
    }
}

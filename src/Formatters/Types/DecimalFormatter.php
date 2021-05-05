<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters\Types;

use Money\Currencies\ISOCurrencies;
use Money\Formatter\DecimalMoneyFormatter;
use RicardoKovalski\CurrencyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class DecimalFormatter
 * @package RicardoKovalski\CurrencyFormatter\Formatters\Types
 */
final class DecimalFormatter extends Formatter
{
    /**
     * DecimalFormatter constructor.
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
    protected function formatter(FormatterConfig $formatterConfig)
    {
        return new DecimalMoneyFormatter(new ISOCurrencies());
    }
}

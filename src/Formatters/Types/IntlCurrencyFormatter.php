<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters\Types;

use Money\Formatter\IntlMoneyFormatter;
use RicardoKovalski\CurrencyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class IntlCurrencyFormatter
 * @package RicardoKovalski\CurrencyFormatter\Formatters\Types
 */
final class IntlCurrencyFormatter extends IntlFormatter
{
    /**
     * IntlCurrencyFormatter constructor.
     * @param FormatterConfig $formatterConfig
     */
    public function __construct(FormatterConfig $formatterConfig)
    {
        $formatterConfig->resetStyleIntl(\NumberFormatter::CURRENCY);
        parent::__construct($formatterConfig);
    }

    /**
     * @param FormatterConfig $formatterConfig
     * @return IntlMoneyFormatter
     */
    public function formatter(FormatterConfig $formatterConfig)
    {
        return $this->getObjectIntlMoneyFormatter($formatterConfig);
    }
}

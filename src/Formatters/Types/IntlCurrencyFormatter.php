<?php

namespace RicardoKovalski\MoneyFormatter\Formatters\Types;

use Money\Formatter\IntlMoneyFormatter;
use RicardoKovalski\MoneyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class IntlCurrencyFormatter
 * @package RicardoKovalski\MoneyFormatter\Formatters\Types
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

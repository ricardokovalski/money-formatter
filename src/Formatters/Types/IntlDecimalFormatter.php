<?php

namespace RicardoKovalski\MoneyFormatter\Formatters\Types;

use Money\Formatter\IntlMoneyFormatter;
use RicardoKovalski\MoneyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class IntlDecimalFormatter
 * @package RicardoKovalski\MoneyFormatter\Formatters\Types
 */
final class IntlDecimalFormatter extends IntlFormatter
{
    /**
     * IntlDecimalFormatter constructor.
     * @param FormatterConfig $formatterConfig
     */
    public function __construct(FormatterConfig $formatterConfig)
    {
        $formatterConfig->resetStyleIntl(\NumberFormatter::DECIMAL);
        parent::__construct($formatterConfig);
    }

    /**
     * @param FormatterConfig $formatterConfig
     * @return IntlMoneyFormatter
     */
    protected function formatter(FormatterConfig $formatterConfig)
    {
        return $this->getObjectIntlMoneyFormatter($formatterConfig);
    }
}

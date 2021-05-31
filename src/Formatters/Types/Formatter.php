<?php

namespace RicardoKovalski\MoneyFormatter\Formatters\Types;

use Money\Currency;
use Money\Formatter\DecimalMoneyFormatter;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;
use RicardoKovalski\MoneyFormatter\Formatters\Contracts\FormatterConfig;

/**
 * Class Formatter
 * @package RicardoKovalski\MoneyFormatter\Formatters\Types
 */
abstract class Formatter
{
    /**
     * @var Currency $currency
     */
    private $currency;

    /**
     * @var IntlMoneyFormatter|DecimalMoneyFormatter $formatter
     */
    protected $formatter;

    /**
     * BaseFormatter constructor.
     *
     * @param FormatterConfig $formatterConfig
     */
    public function __construct(FormatterConfig $formatterConfig)
    {
        $this->currency = new Currency($formatterConfig->getCurrencyIsoCode());
        $this->makeFormatter($formatterConfig);
    }

    /**
     * @param FormatterConfig $formatterConfig
     * @return mixed
     */
    abstract protected function formatter(FormatterConfig $formatterConfig);

    /**
     * @param FormatterConfig $formatterConfig
     * @return mixed
     */
    protected function makeFormatter(FormatterConfig $formatterConfig)
    {
        return $this->formatter = $this->formatter($formatterConfig);
    }

    /**
     * @param $value
     * @return false|string
     */
    public function format($value)
    {
        return $this->formatter->format(new Money(toInteger($value), $this->currency));
    }
}

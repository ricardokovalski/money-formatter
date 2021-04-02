<?php

namespace RicardoKovalski\CurrencyFormatter\Formatters;

use Money\Currency;
use Money\Formatter\DecimalMoneyFormatter;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;
use RicardoKovalski\CurrencyFormatter\Contracts\FormatterConfig;

abstract class BaseFormatter
{
    /**
     * @var Currency $currency
     */
    private $currency;

    /**
     * @var IntlMoneyFormatter|DecimalMoneyFormatter $moneyFormatter
     */
    private $moneyFormatter;

    /**
     * BaseFormatter constructor.
     *
     * @param FormatterConfig $formatterConfig
     */
    public function __construct(FormatterConfig $formatterConfig)
    {
        $this->currency = new Currency($formatterConfig->getCurrencyIsoCode());
        $this->makeMoneyFormatter($formatterConfig);
    }

    /**
     * @param FormatterConfig $formatterConfig
     * @return mixed
     */
    abstract protected function moneyFormatter(FormatterConfig $formatterConfig);

    /**
     * @param FormatterConfig $formatterConfig
     * @return mixed
     */
    protected function makeMoneyFormatter(FormatterConfig $formatterConfig)
    {
        return $this->moneyFormatter = $this->moneyFormatter($formatterConfig);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function format($value)
    {
        return $this->moneyFormatter->format(new Money(toInteger($value), $this->currency));
    }
}

<?php

namespace RicardoKovalski\CurrencyFormatter\Tests;

use PHPUnit\Framework\TestCase;
use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;

class BaseFormatterConfigTest extends TestCase
{
    private $formatterConfig;

    public function setUp()
    {
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
    }

    public function testAssertEqualsLocale()
    {
        $this->assertEquals(Locale::PT_BR, $this->formatterConfig->getLocale());
    }

    public function testAssertEqualsResetLocale()
    {
        $this->formatterConfig->resetLocale(Locale::EN_US);

        $this->assertEquals(Locale::EN_US, $this->formatterConfig->getLocale());
    }

    public function testAssertEqualsCurrencyIsoCode()
    {
        $this->assertEquals(IsoCodes::BRL, $this->formatterConfig->getCurrencyIsoCode());
    }

    public function testAssertEqualsResetCurrencyIsoCode()
    {
        $this->formatterConfig->resetCurrencyIsoCode(IsoCodes::USD);

        $this->assertEquals(IsoCodes::USD, $this->formatterConfig->getCurrencyIsoCode());
    }

    public function testAssertEqualsStyleIntl()
    {
        $this->assertEquals(null, $this->formatterConfig->getStyleIntl());

        $this->formatterConfig->resetStyleIntl(\NumberFormatter::CURRENCY);

        $this->assertEquals(\NumberFormatter::CURRENCY, $this->formatterConfig->getStyleIntl());
    }

    public function testAssertEqualsResetStyleIntl()
    {
        $this->formatterConfig->resetStyleIntl(\NumberFormatter::DECIMAL);

        $this->assertEquals(\NumberFormatter::DECIMAL, $this->formatterConfig->getStyleIntl());
    }
}

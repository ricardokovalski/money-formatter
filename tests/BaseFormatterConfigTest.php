<?php

namespace RicardoKovalski\CurrencyFormatter\Tests;

use PHPUnit\Framework\TestCase;
use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Exceptions\CurrencyIsoCodeException;
use RicardoKovalski\CurrencyFormatter\Exceptions\LocaleException;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;

class BaseFormatterConfigTest extends TestCase
{
    private $formatterConfig;

    public function testExpectedExceptionWhenCurrencyIsoCodeIsNotStringOnConstruct()
    {
        $this->expectException(CurrencyIsoCodeException::class);
        $this->formatterConfig = new BaseFormatterConfig(1, Locale::PT_BR);
    }
    public function testExpectedExceptionWhenCurrencyIsoCodeIsEmptyStringOnConstruct()
    {
        $this->expectException(CurrencyIsoCodeException::class);
        $this->formatterConfig = new BaseFormatterConfig("", Locale::PT_BR);
    }

    public function testExpectedExceptionWhenLocaleIsNotStringOnConstruct()
    {
        $this->expectException(LocaleException::class);
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, 1);
    }
    public function testExpectedExceptionWhenLocaleIsEmptyStringOnConstruct()
    {
        $this->expectException(LocaleException::class);
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, "");
    }

    public function testAssertEqualsLocale()
    {
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
        $this->assertEquals(Locale::PT_BR, $this->formatterConfig->getLocale());
    }

    public function testAssertEqualsResetLocale()
    {
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
        $this->formatterConfig->resetLocale(Locale::EN_US);

        $this->assertEquals(Locale::EN_US, $this->formatterConfig->getLocale());
    }

    public function testAssertEqualsCurrencyIsoCode()
    {
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
        $this->assertEquals(IsoCodes::BRL, $this->formatterConfig->getCurrencyIsoCode());
    }

    public function testAssertEqualsResetCurrencyIsoCode()
    {
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
        $this->formatterConfig->resetCurrencyIsoCode(IsoCodes::USD);

        $this->assertEquals(IsoCodes::USD, $this->formatterConfig->getCurrencyIsoCode());
    }

    public function testAssertEqualsStyleIntl()
    {
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
        $this->assertEquals(null, $this->formatterConfig->getStyleIntl());

        $this->formatterConfig->resetStyleIntl(\NumberFormatter::CURRENCY);

        $this->assertEquals(\NumberFormatter::CURRENCY, $this->formatterConfig->getStyleIntl());
    }

    public function testAssertEqualsResetStyleIntl()
    {
        $this->formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
        $this->formatterConfig->resetStyleIntl(\NumberFormatter::DECIMAL);

        $this->assertEquals(\NumberFormatter::DECIMAL, $this->formatterConfig->getStyleIntl());
    }
}

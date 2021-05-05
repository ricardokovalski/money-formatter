<?php

namespace RicardoKovalski\CurrencyFormatter\Tests\Formatters\Types;

use PHPUnit\Framework\TestCase;
use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\CurrencyFormatter\Formatters\Types\IntlCurrencyFormatter;

class IntlCurrencyFormatterTest extends TestCase
{
    private $formatter;

    public function setUp()
    {
        $this->formatter = new IntlCurrencyFormatter(
            new BaseFormatterConfig(IsoCodes::USD, Locale::EN_US)
        );
    }

    public function testAssertEqualsValueFormatted()
    {
        $this->assertEquals("$250.75", $this->formatter->format(250.75));
    }
}

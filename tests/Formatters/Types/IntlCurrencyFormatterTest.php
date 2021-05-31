<?php

namespace RicardoKovalski\MoneyFormatter\Tests\Formatters\Types;

use PHPUnit\Framework\TestCase;
use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\MoneyFormatter\Formatters\Types\IntlCurrencyFormatter;

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

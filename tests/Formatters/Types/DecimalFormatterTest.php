<?php

namespace RicardoKovalski\CurrencyFormatter\Tests\Formatters\Types;

use PHPUnit\Framework\TestCase;
use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\CurrencyFormatter\Formatters\Types\DecimalFormatter;

class DecimalFormatterTest extends TestCase
{
    private $formatter;

    public function setUp()
    {
        $this->formatter = new DecimalFormatter(
            new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR)
        );
    }

    public function testAssertEqualsValueFormatted()
    {
        $this->assertEquals(268.85, $this->formatter->format(268.85));
    }
}

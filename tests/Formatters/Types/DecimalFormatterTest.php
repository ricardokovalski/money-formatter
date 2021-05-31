<?php

namespace RicardoKovalski\MoneyFormatter\Tests\Formatters\Types;

use PHPUnit\Framework\TestCase;
use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\MoneyFormatter\Formatters\Types\DecimalFormatter;

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
